<?php

  include "dreamconnect.php";

  $title = "Branch Operations";
  $h1 = "Branch Queries";
  html_begin($title, $h1);

?>

<section>

<h1> Search All Branch Details</h1>

<form name= "branchnameform" method="get" action="branchsearch.php">
<input type="submit" name="Submit" value="Accept" >
<br><br>
</form>


<h1> Search Branch Details by Location </h1>

<form name= "branclocationform" method="get" action="location.php">
<lable>Location: </lable> <input type="text" name="location"><br>
<input type="submit" name="Submit" value="Accept" >
<br><br>
</form>

<h1> Search Properties by Branch Number </h1>

<form name= "branchpropform" method="get" action="propertiesbybranch.php">
<lable>Branch No.: </lable> <input type="text" name="bno"><br>
<input type="submit" name="Submit" value="Accept" >
<br><br>
</form>


<h1> Search total Salary by branch number or Post Code </h1>

<form name= "salarybranch" method="get" action="salarybybranch.php">
<lable>Branch No.: </lable> <input type="text" name="bno"><br>
<lable>Post Code: </lable> <input type="text" name="pcode"><br>
<input type="submit" name="Submit" value="Accept" >
<br><br>
</form>

<h1> Select Branch Number to find Fax Number & Telephone Number </h1>

<?php

$conn_id = dream_connect();

$query = "select Bno from branch order by Bno;";

$result_id = mysqli_query($conn_id, $query);

?>
<form name= "fax" method="get" action="branchfindfax.php">
<select name="branch">

<?php

while ($row = mysqli_fetch_assoc($result_id)) {
     	print("<option value='" . $row['Bno'] . "'>" . $row['Bno'] . "</option>");
     }
?>

</select>
<input type="submit" name="Submit" value="Accept" >
</form>

</section>

<?php

html_end();

?>

