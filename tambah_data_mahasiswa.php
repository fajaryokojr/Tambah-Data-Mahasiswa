<?php

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC");


if( isset($_POST["cari"]) ){
    $mahasiswa = cari($_POST["keyword"]);
}
// while ($mhs = mysqli_fetch_row($result)){;
// var_dump($mhs);
// }
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP & MYSQL</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php?=">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="post">

        <input type="text" name="keyword" size="40" autofocus placeholder="Masukan keyword pencarian.." autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    <br><br>
    </form>

    <table border="1" cellpading="5" cellspacing="1">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>E-mail</th>
        <th>Jurusan</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin untuk mengubahnya?')">Ubah</a> |
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin untuk menghapusnya?');">Hapus</a>
        </td>
        <td><img src="../img/<?php echo $row["gambar"]; ?>" width="50" ></td>
        <td><?php echo $row["nim"]; ?></td>
        <td><?php echo $row["nama"];  ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["jurusan"] ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
   
    </table>
</body>
</html>