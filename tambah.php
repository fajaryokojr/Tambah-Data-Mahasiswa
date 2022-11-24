<?php

require 'functions.php';


if( isset($_POST["submit"]) ){


    if( tambah($_POST) > 1){
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'tambah_data_mahasiswa.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'tambah_data_mahasiswa.php';
            </script>
        
        ";
    }

 }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">

    <ul>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" required>
        </li>
        <li>
            <label for="nim">Nim :</label>
            <input type="text" name="nim" id="nim">
        </li>
        <li>
            <label for="email">Email :</label>
            <input type="text" name="email" id="email">
        </li>
        <li>
            <label for="jurusan">Jurusan :</label>
            <input type="text" name="jurusan" id="jurusan">
        </li>
        <li>
            <label for="gambar">Gambar :</label>
            <input type="file" name="gambar" id="gambar">
        </li>
        <li>
            <button type="submit" name="submit" id="submit">Tambah Data</button>
        </li>
    </ul>
    </form>

</body>
</html>