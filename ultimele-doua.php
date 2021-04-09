<?php
$con=mysqli_connect("localhost","vintagew_admin","q8JjdsnZBTe6LXW","vintagew_fazan");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT cuvant,RIGHT(cuvant,2)
FROM fazan ORDER BY id DESC LIMIT 1");

while($row = mysqli_fetch_array($result))
{

echo $row['RIGHT(cuvant,2)'];
}





mysqli_close($con);
?>
