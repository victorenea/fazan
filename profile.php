<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'vintagew_admin';
$DATABASE_PASS = 'q8JjdsnZBTe6LXW';
$DATABASE_NAME = 'vintagew_fazan';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FAZAN</title>
<link rel="icon" href="img/icon.ico" type="image/x-icon"/>

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

<nav class="navtop">
			<div>            	
				<a href="game.php"><i class="fas fa-user-circle"></i>JOC</a>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profil</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
</nav>

</br></br></br></br></br></br>

<a href="game.php"><img src="img/fazan-logo.png" /></a></br></br></br></br></br>
<p2 style="color:#FFFFFF;"><b>
    <!--Start Script-->
       
    

</b></p2></br>

<div style="background-image:url(img/repeat-background.png)"></br></br></br></br>

<p2>Profilul tau</p2>

<!-- [content] -->

			<div><p2>

				<table>
					<tr>
						<td>Nume:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>

					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
				</table>
			</p2></div></br></br></br>



<!-- [/content] -->

</div></br>


</body>



<footer>

<p>Website creat de <a href="https://facebook.com/eneavictor">Victor Enea</a></p>


</footer>
</html>