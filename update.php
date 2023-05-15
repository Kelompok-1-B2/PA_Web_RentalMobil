<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $pesan = isset($_POST['pesan']) ? $_POST['pesan'] : '';
        $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
        $telpon = isset($_POST['telpon']) ? $_POST['telpon'] : '';
        $fotokk = isset($_POST['fotokk']) ? $_POST['fotokk'] : '';
        $fotoktp = isset($_POST['fotoktp']) ? $_POST['fotoktp'] : '';
        $fotosim = isset($_POST['fotosim']) ? $_POST['fotosim'] : '';   
        
        $stmt = $pdo->prepare('UPDATE rentcar SET id = ?, name = ?, pesan = ?, alamat = ?, telpon = ?, fotokk = ?, fotoktp = ?, fotosim = ? WHERE id = ?');
        $stmt->execute([$id, $name, $pesan, $alamat, $telpon, $fotokk, $fotoktp, $fotosim, $_GET['id']]);
        $msg = 'Updated Successfully!';
    }
    $stmt = $pdo->prepare('SELECT * FROM rentcar WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Pesanan doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>



<?=template_header('Read')?>

<div class="content update">
	<h2>Update Pesanan #<?=$contact['id']?></h2>
    <form action="update.php?id=<?=$contact['id']?>" method="post">
        <label for="id">ID</label>
        <label for="name">NAMA</label>
        <input type="text" name="id" value="<?=$contact['id']?>" id="id">
        <input type="text" name="name" value="<?=$contact['name']?>" id="name">
        <label for="pesan">MOBIL PESANAN</label>
        <label for="alamat">ALAMAT</label>
        <input type="text" name="pesan" value="<?=$contact['pesan']?>" id="pesan">
        <input type="text" name="alamat" value="<?=$contact['alamat']?>" id="alamat">
        <label for="telpon">NOMOR TELPON</label>
        <label for="fotokk">FOTO KARTU KELUARGA</label>
        <input type="text" name="telpon" value="<?=$contact['telpon']?>" id="telpon">
        <input type="file" name="fotokk" value="<?=$contact['fotokk']?>" id="fotokk">
        <label for="fotoktp">FOTO KTP</label>
        <label for="fotosim">FOTO SIM</label>
        <input type="file" name="fotoktp" value="<?=$contact['fotoktp']?>" id="fotoktp">
        <input type="file" name="fotosim" value="<?=$contact['fotosim']?>" id="fotosim">
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>
