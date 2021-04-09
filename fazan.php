<?php
$con=mysqli_connect("localhost","vintagew_admin","q8JjdsnZBTe6LXW","vintagew_fazan");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM fazan ORDER BY id DESC");

while($row = mysqli_fetch_array($result))
{


echo "<p2>" . $row['username'] . ": <p2>";
echo "<p2>" . $row['cuvant'] . "</p2></br>";
}





mysqli_close($con);
?>

