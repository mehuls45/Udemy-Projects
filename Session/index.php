<?php

session_start();
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Sessions - PHP</title>
 </head>
 <body>

 	<?php

 		$_SESSION['username'] = 'devuser';
 		$_SESSION['email'] = 'dev@gmail.com';
 		echo 'Session vars set';
 	 ?>
 
 </body>
 </html>