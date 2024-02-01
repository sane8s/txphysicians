<?php
include 'db/dbconnection.php';

if (isset($_GET['Pid'])) {
    $pid = $_GET['Pid'];

  $query = "SELECT * FROM txdocs WHERE ID = $pid";

} else {
  echo "<p>Something went wrong. Couldn't pull details for physician with that ID</p>";
}

$result = mysqli_query($link, $query);

if (mysqli_num_rows($result) > 0){

  /*output data of each row*/
  while($row = mysqli_fetch_assoc($result)){
    $ln = $row["lastName"];
    $fn = $row["firstName"];
    echo "<div class='alert alert-dark text-center' role='alert'><h3>" . "$ln, $fn" . "</h3></div>";

    $imagepath = "/photos/";
    //$imagepath2 = $row["legacyId"] ;
    $personimage = $imagepath . $row["filename"];
    if ($row["photo"] == "Y"){
      //echo "<div class='card mb-3'>"."<div class='row g-0'>"."<div class='col-md-4'>"."<img src='/photos/10000JERamsey.jpg' class='img-fluid img-thumbnail rounded-start' alt='...'>"."</div>"."</div>"."</div>";
      echo "<div class='card mb-3'>"."<div class='row g-0'>"."<div class='col-md-4'>"."<img src='$personimage' class='img-fluid img-thumbnail rounded-start' alt='$fn $ln'>"."</div>"."</div>"."</div>";
    }
    else{
      echo "<p><strong>" . "Image unavailable." . "</strong></p>";
    }

    echo "<p><strong>" . "Gender: " . "</strong>" . $row["gender"] . "</p>";  
    echo "<p><strong>" . "Race: " . "</strong>" . $row["race"] . "</p>";
    echo "<p><strong>" . "Birth Date: " . "</strong>" . $row["birthDate"] . "</p>";  
    echo "<p><strong>" . "Death Date: " . "</strong>" . $row["deathDate"] . "</p>";  
    echo "<p><strong>" . "Place of Birth: " . "</strong>" . $row["birthCity"] . ", " . $row["birthState"] . $row["schoolCountry"] . "</p>";  
    echo "<p><strong>" . "Year Medical License Issued: " . "</strong>" . $row["issuedYear"] . "</p>";  
    echo "<p><strong>" . "Medical School: " . "</strong>" . $row["medSchool"] . "</p>";
    echo "<p><strong>" . "Medical School Location: " . "</strong>" . $row["schoolState"] . $row["schoolCountry"] . "</p>";  
    echo "<p><strong>" . "Degree: " . "</strong>" . $row["degree"] . "</p>";  
    echo "<p><strong>" . "Graduation Date: " . "</strong>" . $row["gradDate"] . "</p>";  
    echo "<p><strong>" . "References: " . "</strong>" . $row["ref1"] . "</p>";  
    echo "<p>" . "            " . $row["ref2"] . "</p>";  
    echo "<p>" . "            " . $row["ref3"] . "</p>";  
    echo "<p>" . "            " . $row["ref4"] . "</p>";  
    echo "<p><strong>" . "Certified by TX Board?: " . "</strong>" . $row["txBoard"] . "</p>";
    echo "<p><strong>" . "Location: " . "</strong>" . $row["location"] . "</p>"; 
    echo "<p><strong>" . "Specialty: " . "</strong>" . $row["specialty"] . "</p>"; 
    echo "<p><strong>" . "Secondary Specialty: " . "</strong>" . $row["specialty2"] . "</p>"; 
    echo "<p><strong>" . "Notes: " . "</strong>" . $row["notes"] . "</p>"; 

  }
} else {
  echo "0 results";
}

/* close connection */
include 'db/dbclose.php';
?>