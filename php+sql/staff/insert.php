<?php

  include "dreamconnect.php";

  $title = "Staff Insert";
  $h1 = "Insert New Staff Member";
  html_begin($title, $h1);

?>


<style>

form {
    width: 35%;
    margin: auto;
    word-wrap: normal;
}

label{ 
    display: inline-block;
    float: left;
    clear: left;
    text-align: right;
}
input {
  display: inline-block;
  float: right;

}

</style>


<section>

<form name= "staffinsert" method="get" action="staffinsert.php">
<lable>Staff No:</lable> <input type="text" name="staffsno"><br><br>
<lable>First Name: </lable> <input  type="text" name="stafffname"><br><br>
<lable>Last Name:</lable> <input type="text" name="stafflname"><br><br>
<lable>Address:</lable> <input type="text" name="staffadd"><br><br>
<lable>Tel No:</lable> <input type="text" name="stafftel"><br><br>
<lable>Position:</lable> <input type="text" name="staffpos"><br><br>
<lable>Sex:</lable> <input type="text" name="staffsex"><br><br>
<lable>DOB:</lable> <input type="text" name="staffdob"><br><br>
<lable>Salary:</lable> <input type="text" name="staffsal"><br><br>
<lable>NIN:</lable> <input type="text" name="staffnin"><br><br>
<lable>Branch No:</lable> <input type="text" name="staffbno"><br><br>
<input type="submit" name="Submit" value="Accept" >
<br>
</form>


<?php

html_end();

?>


