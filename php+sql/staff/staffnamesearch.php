<?php
# issue query
# check values being given

include "dreamconnect.php";

$title = "Staff Details";
$h1 = "Staff Details";
html_begin($title, $h1);

$conn_id = dream_connect();

$firstname = $_GET['stafffname'];
$lastname = $_GET['stafflname'];

$query = "select Sno, Fname, Lname, Position, DOB, Bno, Sex from staff where Fname = '$firstname' and Lname = '$lastname'";


$result_id = mysqli_query($conn_id, $query);
# read & display results of query, then clean up
# DATA_PRINT_LOOP
while ($row = mysqli_fetch_assoc($result_id))
{
print ("<b>Staff Number: </b>");
printf ("%s<br>", $row["Sno"]);
print ("<b>First Name: </b>");
printf ("%s<br>", $row["Fname"]);
print ("<b>Last Name: </b>");
printf ("%s<br>", $row["Lname"]);
print ("<b>Position: </b>");
printf ("%s<br>", $row["Position"]);
print ("<b>DOB: </b>");
printf ("%s<br>", $row["DOB"]);
print ("<b>Branch Number: </b>");
printf ("%s<br>", $row["Bno"]);
print ("<b>Sex: </b>");
printf ("%s<br>", $row["Sex"]);
}
# DATA_PRINT_LOOP
mysqli_free_result($result_id);

html_end();
?>