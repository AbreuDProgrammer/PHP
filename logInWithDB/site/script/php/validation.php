<?php
if (!empty($_POST) AND empty($_POST['user']) OR empty($_POST['pass'])) {
	header("Location: ../../../index.php");
	exit;
}
if (!isset($_SESSION)) session_start();
$_SESSION['hasPermission'] = false;
$_SESSION['user'] = $_POST['user'];
$domain = '192.168.0.1';
$user = 'user';
$password = 'passwd';
$database = 'DB';
$port = '3306'; // default port for MySQL, can be omitted
$connection = mysqli_connect($domain, $user, $password, $database, $port);
$postUser = mysqli_real_escape_string($connection, $_POST['user']);
$postPass = mysqli_real_escape_string($connection, $_POST['pass']);
$sql = "SELECT user FROM `accounts`
	WHERE (`user` LIKE '" . $postUser . "')
	AND (`password` LIKE '" . sha1($postPass) . "');";	// assuming the passwords on the DB are hashed by sha1
$query = mysqli_query($connection, $sql);
if (mysqli_num_rows($query) != 1) {
	echo "Invalid log in";
	header("Location: ../../../index.php");
	exit;
}
$result = mysqli_fetch_assoc($query);
$_SESSION['user'] = $result['user'];
$_SESSION['hasPermission'] = true;
header("Location: ../../../index.php");
?>
