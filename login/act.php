<?php include 'db.php'; ?>

<?php

	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(!empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['password'])) {

			$query = "INSERT INTO login(id,name,username,password) VALUES('','$name','$username','$password')";

			if(mysqli_query($conn, $query)) {
				header("Location: createUser.php?success=User%20Added%20Successfully");
			} else {
				header("Location: createUser.php?error=Error%20in%20adding%20user");
			}
		
	} else {
		header("Location: createUser.php?error=Please%20Fill%20All%20Fields");
	}
?>