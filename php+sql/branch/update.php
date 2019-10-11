<?php

  include "dreamconnect.php";

  $title = "Branch Update";
  $h1 = "Update Branch Details";
  html_begin($title, $h1);

?>

<section>
<h1> Change Telphone Number of Branch</h1>

<form name= "branchupdate" method="get" action="updatenum.php">
<lable>Branch No:</lable> <input type="text" name="bno"><br>
<lable>New Telphone: </lable> <input type="text" name="tel"><br><br>
<input type="submit" name="Submit" value="Accept" >
<br>
</form>



<h1> Change Fax_number of Branch</h1>

<form name= "branchupdate" method="get" action="updatefax.php">
<lable>Branch No: </lable> <input type="text" name="bno"><br>
<lable>New Fax: </lable> <input type="text" name="fax"><br><br>
<input type="submit" name="Submit" value="Accept" >
<br>
</form>
</section>



<?php

html_end();

?>


