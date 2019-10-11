<?php
# issue query
# check values being given

include "dreamconnect.php";

  $title = "Staff Insert";
  $h1 = " Result ";
  html_begin($title, $h1);

$conn_id = dream_connect();

$sno = $_GET['staffsno'];

if (!$conn_id) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "DELETE  
	  From staff
	  WHERE Sno ='$sno'";
 
if (mysqli_query($conn_id, $query)) {
  }
else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn_id);
}

print("<br>");

if (mysqli_affected_rows($conn_id) == 0) {
				     print("No staff member was deleted, this staff number is not in the database");
				}
else {
  print("The staff member was deleted");
}

html_end();

?>