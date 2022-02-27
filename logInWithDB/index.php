<?php
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['user'])) session_destroy();
?>
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
		<form action="./site/script/php/validation.php" method="post" id="log">
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
if (isset($_SESSION))
	if ($_SESSION['hasPermission']) echo '<p>Hello <b>'.$_SESSION['user'].'</b></p>';
	else echo '<p>Access denied for the user '.$_SESSION['user'].', try other password or <a href="#">create a new account</a>!</p><p>';
else echo '<p><a href="#">Sing in</a></p>';
?>
	</body>
</html>
