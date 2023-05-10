<?php
require "koneksi.php";
if(isset($_GET["tambah"])) {
    $nama=$_GET["nama"];
    $nim=$_GET["nim"];
    $kelas=$_GET["kelas"];

    $query="INSERT INTO mahasiswa VALUES
                ('', '$nama', '$nim', '$kelas')";
    mysqli_query($conn,$query);

    echo "<script>
            alert('Berhasil Menambahkan Data');
            document.location.href = 'coba.php';
        </script>";
}

?>

<html>
    <body>
        <h1>Tambah Data</h1>
        <form action="" method="get">
            Nama:
            <input type="text" name="nama">
            <br>
            NIM:
            <input type="text" name="nim">
            <br>
            Kelas:
            <input type="text" name="kelas">
            <br>
            <button type="submit" name="tambah">TAMBAH</button>
        </form>