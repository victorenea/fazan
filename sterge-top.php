<?php
$con=mysqli_connect("localhost","vintagew_admin","q8JjdsnZBTe6LXW","vintagew_fazan");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}




$result = mysqli_query($con,"SELECT * FROM accounts WHERE user_type LIKE 'admin';");

	



	
while($row = mysqli_fetch_array($result)){
	
	echo "<br><button style='width:100px; height:40px;'><a href='admin/reset-top.php'>STERGE TOP</button>";	
}		









mysqli_close($con);
?>