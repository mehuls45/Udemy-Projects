<?php 


	$conn = mysqli_connect('localhost','root','1234','info');

	if(mysqli_connect_errno()){
		echo 'DB connection error';
	}
?>