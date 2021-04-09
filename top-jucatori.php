<?php
$con=mysqli_connect("localhost","vintagew_admin","q8JjdsnZBTe6LXW","vintagew_fazan");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM accounts WHERE wins > 0 ORDER BY wins DESC LIMIT 5");
while($row = mysqli_fetch_array($result))
{
echo '<table style="width:230px;">';
echo '<tr>';
echo '<td>Jucator</td>';
echo '<td>Victorii</td>';
echo '</tr>';
echo '<tr>';
?>


<?php
echo "<th><p style='font-size:25px;'>" . $row['username'] . "</p2></th>";
echo "<td><p2>" . $row['wins'] . "</p2></td>";
?>


<?php
echo '</tr>';
echo '</table>';

}
mysqli_close($con);
?>

