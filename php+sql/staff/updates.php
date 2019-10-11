<?php

  include "dreamconnect.php";

  $title = "Staff Update";
  $h1 = "Update Staff Details";
  html_begin($title, $h1);

?>

<section>
<h1> Change Address of staff member</h1>

<form name= "staffupdate" method="get" action="updateaddr.php">
<lable>Staff No:</lable> <input type="text" name="staffsno"><br>
<lable>New Address: </lable> <input type="text" name="staffadd"><br><br>
<input type="submit" name="Submit" value="Accept" >
<br>
</form>



<h1> Change Salary of staff member</h1>

<form name= "staffupdate" method="get" action="updatesal.php">
<lable>Staff No: </lable> <input type="text" name="staffsno"><br>
<lable>New Salary: </lable> <input type="text" name="staffsal"><br><br>
<input type="submit" name="Submit" value="Accept" >
<br>
</form>
</section>





<?php

html_end();

?>


