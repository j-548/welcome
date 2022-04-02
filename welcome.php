<!DOCTYPE html>

<?php

	session_start();

//checks if session is started and true
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		header("Location: success.php");
	}

//checks if user has provided username and password
	if (isset($_POST['username']) && isset($_POST['password'])) {

			//change session to true and redirect to success page
			$_SESSION['loggedin'] = true;
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['password'] = $_POST['password'];
			header("Location: success.php");
	}


?>

<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>

	<form class="form" action="welcome.php" method="post">
      	<h3>Login Page</h3>

      	<input type="text" class="input" placeholder="Username" name="username" />
      	<input type="password" class="input" placeholder="Password" name="password" />
	      <input type="submit" class="input btn" name="" value="submit">
    </form>


  </body>

</html>
