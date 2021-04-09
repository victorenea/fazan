<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FAZAN</title>
<link rel="icon" href="img/icon.ico" type="image/x-icon"/>

<meta http-equiv="refresh" content="1; URL=game.php">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134271096-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-134271096-2');
</script>



</head>

<body>

</br></br></br></br></br></br>

<a href="game.php"><img src="img/fazan-logo.png" /></a></br></br></br></br></br>
<p2 style="color:#FFFFFF;"><b>
    <!--Start Script-->
       
    

</b></p2></br>

<div class="row" style="background-image:url(img/repeat-background.png)"></br></br></br></br>

<!-- [content] -->


<?php
session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'vintagew_admin';
$DATABASE_PASS = 'q8JjdsnZBTe6LXW';
$DATABASE_NAME = 'vintagew_fazan';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}



// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
	
	
	
// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM accounts WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);
	}
	
	
	
	
if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
	// Account exists, now we verify the password.
	// Note: remember to use password_hash in your registration file to store the hashed passwords.
	if ($_POST['password'] === $password) {
		// Verification success! User has loggedin!
		// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['id'] = $id;
		echo '<p2>Bine ai venit, ' . $_SESSION['name'] . '!</p2>';
	} else {
		echo '<p2>Parola este greșită!</p2>';
	}
} else {
	echo '<p2>Numele sau parola sunt greșite!</p2>';
}


	
	
	
	
	
	
	
	
	


	$stmt->close();
}
?>

</br></br></br></br>


<!-- [/content] -->

</div></br>


</body>



<footer>



</footer>
</html>