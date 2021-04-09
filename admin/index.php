<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.php');
		
	exit;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin - FAZAN</title>



</head>

<body>
</br></br></br></br></br></br></br>

<a href="../index.php"><img src="../img/fazan-logo.png"</a></br></br></br></br></br>
<div style="background-image:url(img/repeat-background.png)"></br>

<p2>Admin Panel</p2></br></br>


<button style="width:220px; height:60px;" onclick="window.location.href='reset.php';">RESETARE</button></br></br>

<button style="width:180px; height:50px;" onclick="window.location.href='../index.php';">Inapoi</button>

</div>



</body>

<footer>
	<div style="position:fixed; bottom:30px; width:100%;">



	</div>
</footer>
</html>