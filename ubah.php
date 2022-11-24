<?php

require 'functions.php';

$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


if( isset($_POST["submit"]) ){


    if( edit($_POST) > 0){
        echo"
            <script>
                alert('data berhasil diedit!');
                document.location.href = 'tambah_data_mahasiswa.php';
            </script>
        ";
    }else{
        echo"
        <script>
            alert('data gagal diedit');
            document.location.href = 'tambah_data_mahasiswa.php';
        </script>
        
        ";
    }

 }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
    <input type="hidden" name="gambarlama" value="<?= $mhs["gambar"]; ?>">
    <ul>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
        </li>
        <li>
            <label for="nim">Nim :</label>
            <input type="text" name="nim" id="nim" value="<?= $mhs["nim"]; ?>">
        </li>
        <li>
            <label for="email">Email :</label>
            <input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>">
        </li>
        <li>
            <label for="jurusan">Jurusan :</label>
            <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
        </li>
        <li>
            <label for="gambar">Gambar :</label><br>
            <img src="../img/<?= $mhs['gambar']; ?>" width="40"> <br>
            <input type="file" name="gambar" id="gambar" value="<?= $mhs["gambar"]; ?>">
        </li>
        <li>
            <button type="submit" name="submit">Edit Data</button>
        </li>   
    </ul>
    </form>

</body>
</html>