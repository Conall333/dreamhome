	<?php
			# issue query

	      include "dreamconnect.php";

	      $title = "Staff Querie";
	      
	      $stafflname = $_GET['stafflname'];
	      $h1 = "Phone Number(s) and Addrerss(es) for lasname: $stafflname";
	      html_begin($title, $h1);

		    $conn_id = dream_connect();


		    $stafflname = $_GET['stafflname'];


		    if (strlen($stafflname) != "") {

			    $query = "select Tel_No, Address from staff where Lname = '$stafflname' order by Fname";


			    $result_id = mysqli_query($conn_id, $query);
			    # read & display results of query, then clean up
			    # DATA_PRINT_LOOP
			    while ($row = mysqli_fetch_assoc($result_id))
			    {
			    print("<br>");
			    print ("<b>Tel No.: </b>");
			    printf ("%s<br>", $row["Tel_No"]);
			    print ("<b>Address: </b>");
			    printf ("%s<br>", $row["Address"]);
			    }
			    # DATA_PRINT_LOOP
			    mysqli_free_result($result_id);
			    }

		    else {

		    print("please fill out the form");
		    
		    
		    }
		    
		    if (mysqli_affected_rows($conn_id) == 0) {
				  print("The is no one with this last name in the database");
				  
		    }


		    html_end();

		    ?>
