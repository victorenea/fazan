<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
?>

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
$sql = "DELETE FROM fazan";

if ($conn->query($sql) === TRUE) {
    echo "<p2>FAZAN a fost resetat!</p2>";
} else {
    echo "<p2>Errore la resetare: </p2>" . $conn->error;
}

$conn->close();

?></br></br>

<?php
$con=mysqli_connect("localhost","bigmicrn_admin","q8JjdsnZBTe6LXW","bigmicrn_fazan");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_SESSION['id'];
$result = mysqli_query($con,"UPDATE accounts SET wins = wins + 1 WHERE id = $id");
$insert = $con->query($result);

mysqli_close($con);


?>

<button onclick="window.location.href='../game.php';" style="width:100px; height:40px; font-size:25px;"  >Inapoi</button></br></br></br>




<?php include '../top-jucatori.php'; ?>




</div>



</body>

<footer>
	<div style="position:fixed; bottom:30px; width:100%;">



	</div>
</footer>
</html>