	<?php
			# issue query

			include "dreamconnect.php";
			
			$bno = $_GET['bno'];

			$title = "Branch Query";
			$h1 = "Properties for Branch $bno";
			html_begin($title, $h1);

			$conn_id = dream_connect();


			$bno = $_GET['bno'];


			if (strlen($bno) != "") {

				$query = "select p.Pno, Rent, Rooms, Type, p.Street, p.Area, p.City, p.Pcode 
				from branch as b join property_for_rent as p
				on b.Bno = p.Bno
				where p.Bno = '$bno';";


				$result_id = mysqli_query($conn_id, $query);
				# read & display results of query, then clean up
				# DATA_PRINT_LOOP
				while ($row = mysqli_fetch_assoc($result_id))
				{
				print("<br>");
				print ("<b>Property No.: </b>");
				printf ("%s ", $row["Pno"]);
				print ("<b>Rent: </b>");
				printf ("%s ", $row["Rent"]);
				print ("<b>Rooms: </b>");
				printf ("%s ", $row["Rooms"]);
				print ("<b>Type: </b>");
				printf ("%s ", $row["Type"]);
				print ("<b>Street: </b>");
				printf ("%s ", $row["Street"]);
				print ("<b>Area: </b>");
				printf ("%s ", $row["Area"]);
				print ("<b>City: </b>");
				printf ("%s ", $row["City"]);
				print ("<b>Pcode: </b>");
				printf ("%s </br></br>", $row["Pcode"]);
				}
				# DATA_PRINT_LOOP
				mysqli_free_result($result_id);
			}

			else {

			print("please fill out the form");
			
			
			}
			
			if (mysqli_affected_rows($conn_id) == 0) {
				     print("Incorrect branch number or this branch does not adiminsiter any properties");
				     
			}


			html_end();
			
			
			?>
