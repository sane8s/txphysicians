<?php 
include 'db/dbconnection.php';

//$query = "SELECT * from txdocs";
$searchFilter = "";
$fnsearchFilter = "";
$genderFilter = "";
$locFilter = "";
$specFilter = "";
$raceFilter = "";
$boardFilter = "";
$letterFilter = "";
$sortFilter = "lastName";

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
  }
  if (isset($_GET['sortBy'])){
    $sortFilter = $_GET['sortBy'];
  } 
  $query = "SELECT * FROM txdocs WHERE firstName LIKE \"$fnsearchFilter%\" AND lastName LIKE \"$searchFilter%\" AND gender LIKE \"$genderFilter%\"AND location LIKE \"$locFilter%\" AND specialty LIKE \"$specFilter%\" AND race LIKE \"$raceFilter%\"AND txBoard LIKE \"$boardFilter%\" AND lastName LIKE \"$letterFilter%\" AND $sortFilter <> '' ORDER BY $sortFilter";
  
    if ($result = mysqli_query($link, $query)) {
  
    // Return the number of rows in result set
    $doccount = mysqli_num_rows( $result );
      
    // Display result
    echo "<h2>$doccount Search Results</h2>";
    echo "<hr>";
}
 
/* close connection */
include 'db/dbclose.php';
?>
