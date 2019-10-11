<?php
# issue query
# check values being given

include "dreamconnect.php";

  $title = "Staff Insert";
  $h1 = " Result ";
  html_begin($title, $h1);

$conn_id = dream_connect();

$sno = $_GET['staffsno'];
$fname = $_GET['stafffname'];
$lname = $_GET['stafflname'];
$add = $_GET['staffadd'];
$tel = $_GET['stafftel'];
$pos = $_GET['staffpos'];
$sex = $_GET['staffsex'];
$dob = $_GET['staffdob'];
$sal = $_GET['staffsal'];
$nin = $_GET['staffnin'];
$bno = $_GET['staffbno'];


if (!$conn_id) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "INSERT INTO staff 
	  values ('$sno', '$fname', '$lname', '$add', '$tel', '$pos', '$sex', '$dob', '$sal', '$nin', '$bno')";

	  
	  
if (mysqli_query($conn_id, $query)) {
  echo "Staff Member Sucessfully Inserted!";
  }
else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn_id);
}

html_end();

?>