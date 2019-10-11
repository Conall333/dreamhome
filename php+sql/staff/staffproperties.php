	<?php
			# issue query

		include "dreamconnect.php";
		
		
		$stafflname = $_GET['stafflname'];
		$stafffname = $_GET['stafffname'];

	 	$title = "Staff Query";
	  	$h1 = "Properties administered by $stafffname $stafflname ";
		  html_begin($title, $h1);

			$conn_id = dream_connect();


			if (strlen($stafflname) != "" &&   strlen($stafffname)!= "") {

				$query = "select Pno, Rent, Rooms, Type, Street, Area, City, Pcode
				from staff join property_for_rent on staff.Sno = property_for_rent.Sno
				 where staff.Lname = '$stafflname' and staff.Fname = '$stafffname'";


				$result_id = mysqli_query($conn_id, $query);
				# read & display results of query, then clean up
				# DATA_PRINT_LOOP
				
				
				while ($row = mysqli_fetch_assoc($result_id))
				{
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
				
				if (mysqli_affected_rows($conn_id) == 0) {
				     print("This staff member does not administer any properties or your spelling is inncorrect");
				}
				# DATA_PRINT_LOOP
				mysqli_free_result($result_id);
			}

			else {

			print("please fill out the form");



			
			}
			
			html_end();
			?>
