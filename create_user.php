<?php
include 'functions1.php';
$pdo = pdo_connect_mysql();
$msg = '';
date_default_timezone_set("Asia/Makassar");
if (!empty($_POST)) {
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $pesan = isset($_POST['pesan']) ? $_POST['pesan'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
    $telpon = isset($_POST['telpon']) ? $_POST['telpon'] : '';
    $fotokk = isset($_POST['fotokk']) ? $_POST['fotokk'] : '';
    $fotoktp = isset($_POST['fotoktp']) ? $_POST['fotoktp'] : '';
    $fotosim = isset($_POST['fotosim']) ? $_POST['fotosim'] : '';
    $d = strtotime("now");
    $time = date("d-m-Y h:i:sa", $d);


    $stmt = $pdo->prepare('INSERT INTO rentcar VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$id, $name, $pesan, $alamat, $telpon, $fotokk, $fotoktp, $fotosim, $time]);
    $msg = 'Created Successfully!';
}
?>


<?=template_header1('Create')?>

<div class="content update">
	<h2>PESANAN</h2>
    <form action="create_user.php" method="post">
        <label for="name">NAMA</label>
        <label for="pesan">MOBIL YANG DIPESAN</label>
        <input type="text" name="name" id="name">
        <input type="text" name="pesan" id="pesan">
        <label for="alamat">ALAMAT</label>
        <label for="telpon">NOMOR TELPON</label>
        <input type="text" name="alamat" id="alamat">
        <input type="text" name="telpon" id="telpon">
        <label for="fotokk">FOTO KARTU KELUARGA</label>
        <label for="fotoktp">FOTO KTP</label>
        <input type="file" name="fotokk" id="fotokk">
        <input type="file" name="fotoktp" id="fotoktp">
        <label for="fotosim">FOTO SIM</label>
        <label for="#"></label>
        <input type="file" name="fotosim" id="fotosim">
        <label for="#"></label>
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer1()?>
