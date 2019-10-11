	<?php
			# issue query

		include "dreamconnect.php";
		
		
		$staffsno = $_GET['staffsno'];

	 	$title = "Staff Query";
	  	$h1 = "Details for $staffsno ";
		  html_begin($title, $h1);

			$conn_id = dream_connect();




				$query = "select distinct(Fname), Lname, staff.Bno, branch.Tel_No, City
				from staff join branch on staff.Bno = branch.Bno
				 where staff.Sno = '$staffsno'";


				$result_id = mysqli_query($conn_id, $query);
				# read & display results of query, then clean up
				# DATA_PRINT_LOOP
				
				
				while ($row = mysqli_fetch_assoc($result_id))
				{
				print ("<b>First Name: </b>");
				printf ("%s <br>", $row["Fname"]);
				print ("<b>Last Name: </b>");
				printf ("%s <br>", $row["Lname"]);
				print ("<b>Bno: </b>");
				printf ("%s <br>", $row["Bno"]);
				print ("<b>Branch Tel_No: </b>");
				printf ("%s <br>", $row["Tel_No"]);
				print ("<b>City: </b>");
				printf ("%s <br>", $row["City"]);
				}
				
				if (mysqli_affected_rows($conn_id) == 0) {
				     print("this staff number is not in the database or is currenlty not administrating any properties");
				}
				# DATA_PRINT_LOOP
				mysqli_free_result($result_id);
			


			html_end();
			
			
			?>
