<html>
<head><title>Ini adalah halaman admin</title>
<style type="text/css">
.inner{
margin: 300px auto;
padding: 20px;
width: 240px;
border: 1px solid #333;
}
</style>
</head>
<body>
<?php
ini_set("display errors", 1);
define('VALID', 1);
require_once('./rezanda.php');
init_login();
validate();
header('./tugas.php');
?>
<h3>Halaman Keluar dari Web</h3>
<p>
<a href="?m=logout">Keluar</a>
<p>
Selamat Datang di halaman admin alay
</body>
</html>