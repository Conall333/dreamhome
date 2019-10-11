	<?php
			# issue query

		include "dreamconnect.php";
		
		
		$bno = $_GET['bno'];
		$pcode = $_GET['pcode'];
		$query = "";

	 	$title = "Branch Query";
	  	$h1 = "Total Salary by Branch Number or  Pcode";
		  html_begin($title, $h1);

			$conn_id = dream_connect();


			if (strlen($bno) != "" &&   strlen($pcode)!= "") {

				$query = "SELECT b.Bno, SUM(SALARY) as total_salary
							FROM branch as b join staff as s
							on b.Bno = s.Bno
							Where b.Bno = '$bno' and pcode = '$pcode'
							Group by b.Bno";
			}

			elseif (strlen($bno) != "" &&  strlen($pcode) == "") {
							$query = "SELECT b.Bno, SUM(SALARY) as total_salary
							FROM branch as b join staff as s
							on b.Bno = s.Bno
							Where b.Bno = '$bno'
							Group by b.Bno";

			}

			elseif (strlen($bno) == "" &&  strlen($pcode) != "") {
							$query = "SELECT b.Bno, SUM(SALARY) as total_salary
							FROM branch as b join staff as s
							on b.Bno = s.Bno
							Where pcode = '$pcode'
							Group by b.Bno"; 
			}

			if (strlen($query) != "") {

				$result_id = mysqli_query($conn_id, $query);
				# read & display results of query, then clean up
				# DATA_PRINT_LOOP
				
				
				while ($row = mysqli_fetch_assoc($result_id))
				{
				print ("<b>Branch Number: </b>");
				printf ("%s ", $row["Bno"]);
				print ("<b>Total Salary: </b>");
				printf ("%s ", $row["total_salary"]);

				}
			
				if (mysqli_affected_rows($conn_id) == 0) {
				     print("Your Search was not found in the datbase, please check your spelling, or this branch does not currently have any employees");
				}
				# DATA_PRINT_LOOP
				mysqli_free_result($result_id);
			}
			else {
				print("Please Fill out the form");
			}
			
			html_end();
			?>
