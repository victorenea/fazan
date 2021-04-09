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

<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
setInterval(function(){
$("#screen").load('fazan.php')
$("#cuvinte").load('cuvinte.php')
$("#ultimul-cuvant").load('ultimul-cuvant.php')
$("#ultimele-doua").load('ultimele-doua.php')
$("#sfarsit-joc").load('sfarsit-joc.php')
}, 1000);
});
</script>


</head>

<body>


</br></br></br>

<a href="game.php"><img src="img/fazan-logo.png" /></a></br>
<p2 style="color:#FFFFFF;"><b>
    <!--Start Script-->
       <div id="cuvinte"></div></br></br>
    

</b></p2></br>

<div class="row"></br>

<div class="column left" style="background-image:url(img/repeat-background.png);">
<p2>Top 5 Jucatori</p2></br></br></br><?php include 'top-jucatori.php'; ?> </div>

<div class="column center" style="background-image:url(img/repeat-background.png)">

<div id="sfarsit-joc"></div>


<div id="ultimul-cuvant"></div>

</br></br>

<?php
// Only process the form is $_POST isn't empty
if ( ! empty( $_POST ) ) {
	
	// Connect to MySQL
	$mysqli = new MySQLi( 'localhost', 'vintagew_admin', 'q8JjdsnZBTe6LXW', 'vintagew_fazan' );
	
	// Check our connection
	if ($mysqli->connect_error ) {
		die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
	}
	
		
	// Insert our data
	$sql = "INSERT INTO fazan ( user_id, username, cuvant ) VALUES ( '{$mysqli->real_escape_string($_SESSION['id'])}', '{$mysqli->real_escape_string($_SESSION['name'])}', '{$mysqli->real_escape_string($_POST['cuvant'])}' )";

	$insert = $mysqli->query($sql);
	
	
	
	//Print response from MySQL
	if ( $insert ) {
		echo "";
	} else {
		die("<p2>Cuvântul a fost deja introdus! :)</p2>");
		echo "";
	}
		
	// Close our connection
	$mysqli->close();
}

?>

<form enctype="multipart/form-data" action="game.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="100000000000000000000" />
<input type="text" autocomplete="off" pattern="<?php include 'ultimele-doua.php' ?>.+" placeholder="Scrie o litera!" required="required" name="cuvant" value="<?php include 'ultimele-doua.php' ?>" />
<input type="submit" value="Trimite" /><br><br></form>

</br></br>


</br></br>



<br><br>

	</div>
    
    
<div class="column right" style="background-image:url(img/repeat-background.png)">
<p2>Cuvinte anterioare</p2></br></br></br>
<div id="screen"></div>
</div>
    
    
</div></br></br></br></br></br>



</body></br></br></br></br>



<footer>


</footer></br></br></br></br>
</html>