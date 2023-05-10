<?php
require "koneksi.php";
$id = $_GET["id"];
if($id ){
    $query = "DELETE FROM mahasiswa WHERE id = $id";
    mysqli_query($conn, $query);

    echo "<script>
            alert('Berhasil Menghapus Data');
            document.location.href = 'coba.php';
            </script>";
}