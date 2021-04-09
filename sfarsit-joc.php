<?php
$con=mysqli_connect("localhost","vintagew_admin","q8JjdsnZBTe6LXW","vintagew_fazan");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%nt'");




while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}

$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%rt'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}

$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%mp'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}

$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%ns'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}

$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%nz'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}


$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%rs'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}

$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%ht'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}

$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%ee'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}

$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%ng'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}

$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%nd'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}

$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%ld'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}

$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%ct'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}


$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%tm'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}




$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%lc'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}

$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%rt'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}


$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%ii'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}



$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%uu'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}



$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%rt'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}


$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%lm'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}



$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%rt'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}

$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%mn'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}


$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%rt'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}


$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%nc'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}



$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%rc'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}



$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%lt'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}

$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%rb'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}

$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%on'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}

$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%ls'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}

$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%xt'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}


$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%up'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}

$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%ct'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}

$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%ft'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}

$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%mb'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";
}


$result = mysqli_query($con,"SELECT * FROM fazan WHERE cuvant LIKE '%rd'");

while($row = mysqli_fetch_array($result))
{
echo "<p2>Jocul s-a terminat!</p2></br>";
echo "<p1>" . $row['username'] . " a castigat!</br></p1></br>";
echo "<button style='width:200px; height:100px;'><a href='admin/reset.php'><p2>RESETARE JOC</p2></button>";

$win = "UPDATE accounts SET wins = wins + 1 WHERE id = user_id";
$insert = $con->query($win);

}


mysqli_close($con);
?>

