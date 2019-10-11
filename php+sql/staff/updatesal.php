<?php
# issue query
# check values being given

include "dreamconnect.php";

  $title = "Staff Insert";
  $h1 = " Result ";
  html_begin($title, $h1);

$conn_id = dream_connect();

$sno = $_GET['staffsno'];
$sal = $_GET['staffsal'];

if (!$conn_id) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "UPDATE staff 
	  SET  Salary = '$sal'
	  WHERE Sno ='$sno'" ;

	  
	  
if (mysqli_query($conn_id, $query)) {
  $result = "The Staff member was successfully updated";
  }
else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn_id);
}

if (mysqli_affected_rows($conn_id) == 0) {
				     print("This Staff Number is not in the database ");
				}
else {
    print ("$result");
    }

html_end();

?>