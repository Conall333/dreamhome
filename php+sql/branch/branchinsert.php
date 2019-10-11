<?php

include "dreamconnect.php";

  $title = "Branch Insert";
  $h1 = " Result ";
  html_begin($title, $h1);

$conn_id = dream_connect();

$bno = $_GET['bno'];
$street = $_GET['street'];
$area = $_GET['area'];
$city = $_GET['city'];
$pcode = $_GET['pcode'];
$tel = $_GET['tel'];
$fax = $_GET['fax'];


if (!$conn_id) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "INSERT INTO branch
	  values ('$bno', '$street', '$area', '$city', '$pcode', '$tel', '$fax')";

	  
	  
if (mysqli_query($conn_id, $query)) {
  echo "New Branch Sucessfully Inserted!";
  }
else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn_id);
}

html_end();

?>