<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Member Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php if(isset($_GET['error'])): ?>
			<div class="error"><h3><?php echo $_GET['error']; ?></h3></div>
	<?php endif; ?>

	<?php if(isset($_GET['success'])): ?>
			<div class="success"><h3><?php echo $_GET['success']; ?></h3></div>
	<?php endif; ?>

	<h4>Hey <?php echo $_SESSION['name']; ?></h4>
	<h4>Username: <?php echo $_SESSION['username']; ?></h4>



</body>
</html>