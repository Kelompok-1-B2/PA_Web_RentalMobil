<?php
    require "koneksi.php";
    $id = $_GET["id"];
    $query= "SELECT * FROM mahasiswa WHERE id = '$id'";
    $result= mysqli_query($conn, $query);

    function ubah($data){
        global $conn;

        $id = $_POST["id"];
        $nama = $_POST["nama"];
        $nim = $_POST["nim"];
        $kelas = $_POST["kelas"];
        $query = "UPDATE mahasiswa SET
                    nama = '$nama',
                    nim = '$nim',
                    kelas = '$kelas'
                    WHERE id = '$id'";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    if( !isset($_GET["id"]) ){
        header("Location: coba.php");
        exit;
    }else if( mysqli_num_rows($result) > 0){

    }else{
        header("Location: coba.php");
        exit;
    }

    if( isset($_POST["update"]) ){
        if( ubah($_POST) > 0){
            echo "<script>
                    alert('Berhasil Mengubah Data');
                    </script>";
        }else{
            echo "<script>
            alert('Gagal Mengubah Data');
            document.location.href = 'coba.php';
            </script>";
        }
    }

?>

<html>
    <body>
        <h1>Ubah Data</h1>
        <form action="" method="post">
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
            <input type ="hidden" name="id" value="<?= $row['id']?>">
            Nama:
            <input type="text" name="nama" value="<?php echo $row['nama']?>">
            <br>
            NIM:
            <input type="text" name="nim" value="<?php echo $row['nim']?>">
            <br>
            Kelas:
            <input type="text" name="kelas" value="<?php echo $row['kelas']?>">
            <br>
            <button type="submit" name="update">UPDATE</button>
            <?php endwhile ?>
        </form>
    </body>
</html>