<?php

  include "dreamconnect.php";

  $title = "Branch Insert";
  $h1 = "Insert New Branch";
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



<form name= "branchinsert" method="get" action="branchinsert.php">
<lable>Branch No.:</lable> <input type="text" name="bno"><br><br>
<lable>Street: </lable> <input  type="text" name="street"><br><br>
<lable>Area: </lable> <input type="text" name="area"><br><br>
<lable>City: </lable> <input type="text" name="city"><br><br>
<lable>Post Code: </lable> <input type="text" name="pcode"><br><br>
<lable>Branch Tel No.: </lable> <input type="text" name="tel"><br><br>
<lable>Fax No.: </lable> <input type="text" name="fax"><br><br>

<input type="submit" name="Submit" value="Accept" >
<br>
</form>


<?php

html_end();

?>


