<?php
# issue query

include "dreamconnect.php";

$conn_id = dream_connect();

$title = "Branch Details";
$h1 = "All Branch Details";
html_begin($title, $h1);


$query = "select Bno, Street, Area, City, Pcode, Tel_No, Fax_No from branch";

if (mysqli_query($conn_id, $query)) {
    print(" Query Sucessfull <br>");
   
  }
else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn_id);
}

print("<br>");




$result_id = mysqli_query($conn_id, $query);
# read & display results of query, then clean up
# DATA_PRINT_LOOP


print("<table>\n");
while ($row = mysqli_fetch_row($result_id))
{
  print("<tr>\n");
  
  for($i = 0; $i < mysqli_num_fields($result_id); $i ++) 
      {
      
      printf("<td>%s</td>\n", htmlspecialchars($row[$i]));
      
      }
  print("</tr>\n");
}
# DATA_PRINT_LOOP
mysqli_free_result($result_id);
print("</table>\n");
?>