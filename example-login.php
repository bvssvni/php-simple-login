<?php include("login.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>PHP Simple Login Example</title>
	</head>
	<body>
		<h1>PHP Simple Login Example</h1>
		<p>
		Click on the link below to log in.<br />
		Unless you changed the SHA1 hash in 'login.php', the password is 'password'.<br />
		When you are logged in, the edit link changes to a 'Log Out' button.<br />
		Even when you hit refresh the server should remember whether you are logged in or not.<br />
		</p>
		<?php login(); ?>
	</body>
</html>
