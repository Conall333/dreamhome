<?php

  include "dreamconnect.php";

  $title = "Staff Delete";
  $h1 = "Delete Staff Member";
  html_begin($title, $h1);

?>


<section>
<h1> This action is permanent</h1>

<form name= "staffupdate" method="get" action="deletestaff.php">
<lable>Staff No:</lable> <input type="text" name="staffsno"><br><br>
<input type="submit" name="Submit" value="Accept" >
<br>
</form>
<section>

<?php

html_end();

?>


