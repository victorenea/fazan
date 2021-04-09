<?php
$con=mysqli_connect("localhost","vintagew_admin","q8JjdsnZBTe6LXW","vintagew_fazan");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM accounts WHERE user_type LIKE 'admin';");


while($row = mysqli_fetch_array($result))
{
echo "<button><a href='reset-admin.php'>STERGE CUVANT</button>";
}

mysqli_close($con);
?>