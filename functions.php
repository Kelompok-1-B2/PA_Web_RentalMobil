<?php
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'rentalmobil';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style9.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
    <nav class="navtop">
    	<div>
    		<h1>Admin</h1>
            <a href="index1.php"><i class="fas fa-home"></i>Home</a>
    		<a href="read.php"><i></i>Pesanan</a>
			<a href="tambah_mobil.php"><i></i>Kelola Mobil</a>
			<a href="user.php"><i></i>Kelola Akun User</a>
			<a href="admin.php"><i></i>Kelola Akun Admin</a>
			<a href="logout.php"><i></i>Logout</a>
    	</div>
    </nav>
EOT;
}
function template_footer() {
echo <<<EOT
    </body>
</html>
EOT;
}
?>