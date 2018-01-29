<?php include 'db.php'; ?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="POST" action="act.php">

		<?php if(isset($_GET['error'])): ?>
			<div class="error"><h3><?php echo $_GET['error']; ?></h3></div><br><br>
		<?php endif; ?>

		<?php if(isset($_GET['success'])): ?>
			<div class="success"><h3><?php echo $_GET['success']; ?></h3></div><br><br>
		<?php endif; ?>

		<label>Name</label><br>
		<input type="text" name="name"><br><br>

		<label>Username</label><br>
		<input type="text" name="username"><br><br>

		<label>Password</label><br>
		<input type="password" name="password"><br><br>

		<input class="btn" type="submit" value="Create Account">

		<a href="index.php">Sign In</a>


	</form>

</body>
</html>