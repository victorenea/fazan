<p2>Cuvinte:
<?php
$mysqli = new mysqli("localhost","vintagew_admin", "q8JjdsnZBTe6LXW", "vintagew_fazan");

$query = $mysqli->prepare("SELECT * FROM fazan");
$query->execute();
$query->store_result();

$rows = $query->num_rows;

echo $rows;

// Return 4 for example
?> | Record: 57 | Online:  -1<?php include('online2.php'); ?>





</p2></br></br>