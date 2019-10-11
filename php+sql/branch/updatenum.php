<?php
# issue query
# check values being given

include "dreamconnect.php";

  $title = "Branch Insert";
  $h1 = " Result ";
  html_begin($title, $h1);

$conn_id = dream_connect();

$bno = $_GET['bno'];
$tel = $_GET['tel'];

if (!$conn_id) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "UPDATE branch
	  SET  Tel_No = '$tel'
	  WHERE Bno ='$bno'" ;

	  
	  
if (mysqli_query($conn_id, $query)) {
  $result = "The Branch telephone number was successfully updated";
  }
else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn_id);
}

if (mysqli_affected_rows($conn_id) == 0) {
				     print("This Branch Number is not in the database ");
				}
else {
    print ("$result");
    }

html_end();

?>