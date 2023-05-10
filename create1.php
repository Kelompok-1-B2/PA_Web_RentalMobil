<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (!empty($_POST)) {
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    $fotom = isset($_POST['fotom']) ? $_POST['fotom'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $harga = isset($_POST['harga']) ? $_POST['harga'] : '';
    $transmisi = isset($_POST['transmisi']) ? $_POST['transmisi'] : '';
    

    $stmt = $pdo->prepare('INSERT INTO car VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$id, $fotom, $name, $harga, $transmisi,]);
    $msg = 'Created Successfully!';
}
?>


<?=template_header('Create')?>

<div class="content update">
	<h2>Buat Pesanan</h2>
    <form action="create1.php" method="post">
        <label for="id">ID</label>
        <label for="fotom">FOTO MOBIL</label>
        <input type="text" name="id" value="auto" id="id">
        <input type="file" name="fotom" id="fotom">
        <label for="name">NAMA MOBIL</label>
        <label for="harga">HARGA</label>
        <input type="text" name="name" id="name">
        <input type="text" name="harga" id="harga">
        <label for="transmisi">TRANSMISI</label>
        <input type="text" name="transmisi" id="transmisi">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>