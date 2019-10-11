<?php
# issue query
# check values being given

include "dreamconnect.php";

  $title = "Delete Branch";
  $h1 = " Result ";
  html_begin($title, $h1);

$conn_id = dream_connect();

$bno = $_GET['bno'];

if (!$conn_id) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "DELETE  
	  From branch
	  WHERE Bno ='$bno'";
 
if (mysqli_query($conn_id, $query)) {
  }
else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn_id);
}

print("<br>");

if (mysqli_affected_rows($conn_id) == 0) {
				     print("No Branch was deleted, this Branch number is not in the database");
				}
else {
  print("The Branch was deleted");
}

html_end();

?>