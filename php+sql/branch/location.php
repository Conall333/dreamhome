	<?php
			# issue query

			include "dreamconnect.php";

		  $title = "Branch Query";
		  $h1 = "Search Branch by Location";
		  html_begin($title, $h1);

			$conn_id = dream_connect();


			$location = $_GET['location'];


			if (strlen($location) != "") {

				$query = "select Bno, Street, Area, City, Pcode, Tel_No from branch where City like '%$location%' or Area like '%$location%';";


				$result_id = mysqli_query($conn_id, $query);
				# read & display results of query, then clean up
				# DATA_PRINT_LOOP
				while ($row = mysqli_fetch_assoc($result_id))
				{
				print("<br>");
				print ("<b>Branch No.: </b>");
				printf ("%s<br>", $row["Bno"]);
				print ("<b>Street: </b>");
				printf ("%s<br>", $row["Street"]);
				print ("<b>Area: </b>");
				printf ("%s<br>", $row["Area"]);
				print ("<b>City: </b>");
				printf ("%s<br>", $row["City"]);
				print ("<b>Tel No.: </b>");
				printf ("%s<br>", $row["Tel_No"]);
				print ("<b>Pcode: </b>");
				printf ("%s<br>", $row["Pcode"]);
				}
				# DATA_PRINT_LOOP
				mysqli_free_result($result_id);
			}

			else {

			print("please fill out the form");
			
			
			}
			
			if (mysqli_affected_rows($conn_id) == 0) {
				     print("This Location does not have a branch");
				     
			}


			html_end();

			?>
