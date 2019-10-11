<?php
#dreamconnect.php – common connection function
#Connect to the MySQL server using top-secret username & password
function dream_connect()
{
$conn_id = mysqli_connect ("cs1.ucc.ie", "cpmc3", "Quohx0ie", "csdipact2018_cpmc3")
or print("Error, Failed to connect to Database") ;
return $conn_id;
}
# function that takes a title and heading and prints some html
function html_begin($title, $h1)
{
	print("<!DOCTYPE html>");
	print("<html lang='en'>");
    print("<head>");
      	print("<meta charset='utf-8'/>");
      	print("<meta name='viewport' content='initial-scale=1.0, width=device-width' />");
      	print("<title>$title</title>");
      	print("<link rel='stylesheet' href='../dreamstyles.css'/>");
    print("</head>");

    print("<body>");
    
    
	print("<header>");
		print("<h1>Branch Operations</h1>");
	print("</header>");
		
	print("<nav>");
    	print("<ul>");
			print("<li><a href='../index.html'>Home</a></li>");
			print("<li><a href='../staff/staff_operations.html'>Staff Operations</a></li>");
			print("<li><a href='branch_operations.html'>Branch Operations</a></li>");
    	print("</ul>");
	print("</nav>");

	print("<main>");
	print("<h1>$h1</h1>");
	print("<br>");

}


function html_end() 
{

				print("</main>");
   print("</body>");
print("</html>");

}


?>