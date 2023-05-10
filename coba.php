<?php
require "koneksi.php";
$query ="SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $query);
?>

<html>
    <body>
        <h1>Halaman Utama</h1>
        <a href = tambah.php>Tambah</a>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Kelas</th>
                <th>Pengaturan</th>
            </tr>
            <?php
            $i = 1;
            while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row["id"]?></td>
                <td><?php echo $row["nama"]?></td>
                <td><?php echo $row["nim"]?></td>
                <td><?php echo $row["kelas"]?></td>
                <td>
                    <a href="hapus.php?id=<?php echo $row['id']?>">Hapus</a>,
                    <a href="update.php?id=<?php echo $row['id']?>">Update</a>
                </td>
            </tr>
            <?php $i++ ?>
            <?php } ?>
    </body>
</html>