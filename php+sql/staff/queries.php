<?php

  include "dreamconnect.php";

  $title = "Staff Queries";
  $h1 = "Staff Queries";
  html_begin($title, $h1);

?>

<section>

<h1> Staff Search by number</h1>

<form name= "staffnameform" method="get" action="staffsearch.php">
<lable>Staff Number:</lable> <input type="text" name="staffnum"><br>
<input type="submit" name="Submit" value="Accept" >
<br><br>
</form>

<h1> Search for phone number and address by last name </h1>

<form name= "staffnumform" method="get" action="staffphonesearch.php">
Last Name: <input type="text" name="stafflname"><br>
<input type="submit" name="Submit" value="Accept" >
<br><br>
</form>

<h1> Search Staff details by First and Last name </h1>


<form name= "staffnumform" method="get" action="staffnamesearch.php">
<lable>First Name:</lable> <input type="text" name="stafffname"><br>
<lable>Last Name: </lable> <input type="text" name="stafflname"><br>
<input type="submit" name="Submit" value="Accept" >
<br><br>
</form>

<h1> Search for propeties administered by staff name</h1>

<form name= "staffprop" method="get" action="staffproperties.php">
First Name: <input type="text" name="stafffname"><br>
Last Name: <input type="text" name="stafflname"><br>
<input type="submit" name="Submit" value="Accept" >
<br><br>
</form>


<h1> Search for staff member's Branch by Staff Number</h1>

<form name= "staffbranch" method="get" action="staffbranch.php">
Staff Number: <input type="text" name="staffsno"><br>
<input type="submit" name="Submit" value="Accept" >
<br><br>
</form>
</section>

<?php

html_end();

?>

