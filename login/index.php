<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php if(isset($_GET['error'])): ?>
			<div class="error"><h3><?php echo $_GET['error']; ?></h3></div><br><br>
		<?php endif; ?>

		<?php if(isset($_GET['success'])): ?>
			<div class="success"><h3><?php echo $_GET['success']; ?></h3></div><br><br>
		<?php endif; ?>

	<form method="POST" action="act_login.php">
		<label>Username</label><br>
		<input type="text" name="username"><br><br>

		<label>Password</label><br>
		<input type="password" name="password"><br><br>

		<input class="btn" type="submit" value="Login">

		<a href="createUser.php">Sign Up</a>
	</form>

</body>
</html>