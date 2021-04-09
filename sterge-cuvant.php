<?php
$con=mysqli_connect("localhost","vintagew_admin","q8JjdsnZBTe6LXW","vintagew_fazan");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}




$user_type = $_SESSION['user_type'];

		
	
if ($user_type == 'admin') {

echo "<br><button style='width:100px; height:40px;'><a href='admin/reset-cuvant.php'>STERGE CUVANT</button>";	
	
}









mysqli_close($con);
?>