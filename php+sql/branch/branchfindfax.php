<?php
# issue query

include "dreamconnect.php";

$bno = $_GET['branch'];


$title = "Branch Query";
$h1 = "Fax for Branch $bno";
html_begin($title, $h1);

$conn_id = dream_connect();



$query = "select Fax_No, Tel_No from branch where Bno = '$bno';";

$result_id = mysqli_query($conn_id, $query);
# read & display results of query, then clean up
# DATA_PRINT_LOOP
while ($row = mysqli_fetch_assoc($result_id))
{

print("<br>");
print ("<b>Fax Number.: </b>");
printf ("%s <br>", $row["Fax_No"]);
print ("<b>Tel Number.: </b>");
printf ("%s ", $row["Tel_No"]);

}
# DATA_PRINT_LOOP
mysqli_free_result($result_id);


if (mysqli_affected_rows($conn_id) == 0) {
	     print("No fax for this branch number");
	     
}


html_end();


?>
