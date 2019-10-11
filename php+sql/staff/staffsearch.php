<?php
# issue query

include "dreamconnect.php";

$conn_id = dream_connect();

$title = "Staff Name";
$h1 = "Staff Name";
html_begin($title, $h1);

$sno = $_GET['staffnum'];

$query = "select Fname, Lname from staff where Sno = '$sno'";

if (mysqli_query($conn_id, $query)) {
  }
else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn_id);
}

print("<br>");

if (mysqli_affected_rows($conn_id) == 0) {
				     print("Three is no staff member with this name in the database");
				}


$result_id = mysqli_query($conn_id, $query);
# read & display results of query, then clean up
# DATA_PRINT_LOOP
while ($row = mysqli_fetch_assoc($result_id))
{
print ("<b>First Name: </b>");
printf ("%s<br>", $row["Fname"]);
print ("<b>Last Name: </b>");
printf ("%s<br>", $row["Lname"]);
}
# DATA_PRINT_LOOP
mysqli_free_result($result_id);

html_end()
?>