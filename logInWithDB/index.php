<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="author" content="">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="viewport" content="width = device-width, initial-scale = 1">
		<title>Log In Example</title>
	</head>
	<body>
		<h1>Log In example using a DB</h1>
		<p>Verify if the account exists and if the password hash equals to the one in the DB.</p>
		<form action="#" method="post" id="log">
			<fieldset form="log">
				<legend>Log In</legend>
				<label for="user">username: </label>
				<input type="text" name="user" required>
				<br>
				<label for="pass">password: </label>
				<input type="password" name="pass" required>
				<input type="submit" name="login" value="Log In">
			</fieldset>
		</form>
<?php
if (isset($_POST['login'])) {
	session_start();
	$id = session_id();
	if (isset($id)) {
		$_SESSION['hasPermition'] = false;
		$domain = '192.168.0.1';
		$user = 'user';
		$password = 'passwd';
		$database = 'DB';
		$table = 'account';
		$port = '3306'; // default port for MySQL, can be omitted
		$connection = mysqli_connect($domain, $user, $password, $database, $port);
		$query = 'SELECT username FROM '.$table.' WHERE password LIKE \''.sha1($_POST['pass']).'\'';	// assuming the passwords on the DB are hashed by sha1
		if ($result = mysqli_query($connection, $query))
			while ($row = mysqli_fetch_row($result))
				if ($_POST['user'] == $row[0]) {
					$_SESSION['user'] = $_POST['user'];
					$_SESSION['hasPermition'] = true;
					break;
				}
	}
	if (isset($_SESSION['hasPermition']) && $_SESSION['hasPermition'] === true) echo '<p>Hello <b>'.$_SESSION['user'].'</b></p>';
	else echo '<p>Access denied for the user '.$_POST['user'].', try other password or <a href="#">create a new account</a>!</p><p>';
} else echo '<p><a href="#">Sing in</a></p>';
?>
	</body>
</html>
