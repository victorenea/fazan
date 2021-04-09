<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="0; url=../game.php">
<title>Admin - FAZAN</title>



</head>

<body>
</br></br></br></br></br></br></br>

<a href="game.php"><img src="img/fazan-logo.png" /></a></br>
<p2 style="color:#FFFFFF;"><b>
    <!--Start Script-->
       <div id="cuvinte"></div></br></br></br></br>
    

</b></p2></br>
<div style="background-image:url(img/repeat-background.png)"></br>


<?php

$servername = "localhost";
$username = "vintagew_admin";
$password = "q8JjdsnZBTe6LXW";
$dbname = "vintagew_fazan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "UPDATE FROM accounts SET wins = 0";

if ($conn->query($sql) === TRUE) {
    echo "<p2>Top-ul a fost resetat!</p2>";
} else {
    echo "<p2>Errore la resetare: </p2>" . $conn->error;
}

$conn->close();

?></br></br>

<button onclick="window.location.href='../game.php';">Inapoi</button>

</div>



</body>

<footer>
	<div style="position:fixed; bottom:30px; width:100%;">



	</div>
</footer>
</html>