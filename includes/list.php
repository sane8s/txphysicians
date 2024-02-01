<?php
include 'db/dbconnection.php';

$searchFilter = "";
$fnsearchFilter = "";
$genderFilter = "";
$locFilter = "";
$specFilter = "";
$raceFilter = "";
$letterFilter = "";
$sortFilter = "lastName";
if (isset($_GET['search']) || (isset($_GET['fnsearch'])) || (isset($_GET['gender'])) || (isset($_GET['locationsearch'])) || (isset($_GET['id']))){
if (isset($_GET['search'])){
  $searchFilter = $_GET['search'];
}
if (isset($_GET['fnsearch'])){
  $fnsearchFilter = $_GET['fnsearch'];
}
if (isset($_GET['gender'])){
  $genderFilter = $_GET['gender'];
}
if (isset($_GET['locationsearch'])){
  $locFilter = $_GET['locationsearch'];
}
if (isset($_GET['specialty'])){
  $specFilter = $_GET['specialty'];
}
if (isset($_GET['race'])){
  $raceFilter = $_GET['race'];
} 
if (isset($_GET['board'])){
  $boardFilter = $_GET['board'];
} 
if (isset($_GET['id'])) {
  $letterFilter = $_GET['id'];
  echo "<div class='alert alert-dark text-center' role='alert'><h3>" . $letterFilter . "</h3></div>";
}
if (isset($_GET['sortBy'])){
  $sortFilter = $_GET['sortBy'];
} 
$query = "SELECT * FROM txdocs WHERE firstName LIKE \"$fnsearchFilter%\" AND lastName LIKE \"$searchFilter%\" AND gender LIKE \"$genderFilter%\"AND location LIKE \"$locFilter%\" AND specialty LIKE \"$specFilter%\" AND race LIKE \"$raceFilter%\"AND txBoard LIKE \"$boardFilter%\" AND lastName LIKE \"$letterFilter%\" AND $sortFilter <> '' ORDER BY $sortFilter";
}
else {
  $query = "SELECT * FROM txdocs ORDER BY lastName";
}

$result = mysqli_query($link, $query);

echo "<b><p>Query:</b> $query</p>";

if (mysqli_num_rows($result) > 0){
  /*output data of each row*/
  while($row = mysqli_fetch_assoc($result)){
    $p = $row["legacyId"];
    $fn = $row["firstName"];
    $ln = $row["lastName"];
    $ms = $row["medSchool"];
      $gd = $row["gradDate"];
      $loc = $row["location"];

    //echo "<p><strong>" . $row["lastName"] . ", " . $row["firstName"] . " </strong>" . $row["specialty"] ." <em>Location: " . $row["location"]. "<a href='http://192.168.168.122/person.php?personid=$row["id"]'"></a>" . "</em></p>";  
    echo "<p><a href='person.php?Pid=$p'>$ln, $fn</a> | Graduated <b>$ms</b> in <b>$gd</b>. | Worked in <b>$loc</b>. </p>";
  }
} else {
  echo "0 results";
}

/* close connection */
include 'db/dbclose.php';
?>
