<?php include 'db.php'; ?>

<?php
	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(!empty($_POST['username']) && !empty($_POST['password'])) {

			$query = "SELECT * FROM login WHERE username = '$username' ";
			$dbpass = mysqli_query($conn, $query);

			$row = mysqli_fetch_assoc($dbpass);

			$_SESSION['username'] = $row['username'];
 			$_SESSION['name'] = $row['name'];

			if($row['password'] == $password) {
				header("Location: mempage.php?success=Successfully%20Logged%20In");
			} else {
				header("Location: index.php?error=Wrong%20password%20or%20username");
			}
		
	} else {
		header("Location: index.php?error=Please%20Fill%20All%20Fields");
	}
?>