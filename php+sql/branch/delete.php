<?php

  include "dreamconnect.php";

  $title = "Branch Delete";
  $h1 = "Delete Branch";
  html_begin($title, $h1);

?>

<section>
<h1> This action is permanent</h1>
<form name= "branchdelete" method="get" action="deletebranch.php">
<lable>Branch No:</lable> <input type="text" name="bno"><br><br>
<input type="submit" name="Submit" value="Accept" >
<br>
</form>
<section>


<?php

html_end();

?>


