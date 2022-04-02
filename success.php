<?php

	session_start();

//redirects back to login page if user is not logged in or
//tries accessing success page
	if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
		header("Location: welcome.php");
	}


?>

<!DOCTYPE html>

<html>

<link rel="stylesheet" href="css/styles.css">

 <body>

  <div>
   <h2 class="form">Welcome <?php echo $_SESSION['username'] ?>!</h2>
  </div>

 </body>

</html>
