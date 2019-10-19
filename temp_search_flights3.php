<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Searching for flights</title>
	<style type="text/css">
		h1
		{
			color:gold;
			font-family: Bradley Hand ITC;
		}
		body
		{
			font-family: sans-serif;
			padding:0;
			margin:0;
			background-color: #EBF2F7;
		}
		#a
		{
			float:left;
			position:absolute;
			z-index:2;
			font-family: Agency FB;
			padding:20px;
			/*margin:20px;*/
		}

		#b
		{
			float:right;
			padding-right:50px;
			padding-top:10px;
			position:relative;
			z-index: 2;
			right:20px;
			font-family: Franklin Gothic Book;
			color:white;
		}

		#c
		{
			float:right;
			padding-right:0px;
			padding-top:30px;
			z-index:3;
			position:relative;
			right:-80px;
			font-family: Franklin Gothic Book;
			color:white;
		}

		#d
		{
			float:right;
			/*padding-right:20px;*/
			/*padding-top:50px;*/
			z-index:4;
			position:relative;
			right:-190px;
			top:45px;
			font-family: sans-serif;
			color:white;
		}
		.topbar
		{
			background-color: #262624;
			width: 1370px;
			height:100px;
			font-family: Bradley Hand ITC;
		}

		#blr
		{
			display: inline-block;
			font-size: 15px;
			font-family: sans-serif;
			color:#1293cf;
			padding-left: 50px;
			float:left;
		}

		#syd
		{
			display: inline-block;
			font-size: 15px;
			font-family: sans-serif;
			color:#1293cf;
			padding-left: 5px;
			padding-right: 5px;
			border-right: 2px grey solid;
			float:left;

		}

		#toandfro
		{
			height:20px;
			width: 20px;
			display: inline-block;
			padding-left: 5px;
			float:left;
		}

		#depart
		{
			display: inline-block;
			color:red;
			font-size:15px;
			padding-left: 5px;
			float:left;
		}

		#return1
		{
			display: inline-block;
			color:red;
			font-size:15px;
			padding-left: 5px;
			float:left;
		}

		#adults
		{
			display: inline-block;
			color:red;
			font-size:15px;
			padding-left: 5px;
			float:left;
		}

		#infants
		{
			display: inline-block;
			color:red;
			font-size:15px;
			padding-left: 5px;
			float:left;

		}

		#children
		{
			display: inline-block;
			color:red;
			font-size:15px;
			padding-left: 5px;
			float:left;
		}

		#flight_results
		{
			padding-left: 20px;
			font-size:15px;
			font-family: Open Sans;

			
		}

		#sections
		{
			font-size:16px;
			font-family: Arial;
			background-color: white;
			width:65%;	
			padding-top: 15px;
			padding-bottom: 12px;
			margin-bottom: 	5px;
			border-bottom: 	2px #EBF2F7 solid;
			border-radius: 10px;
			background-color: #b7e3ff;
			/*font-weight: 200;*/
		}

		.indsections
		{
			padding-left:80px;
			padding-right: 80px;
			border-right: 3px #EBF2F7 solid;


		}

		#flight_details
		{		
			background-color:white;
			font-size:12px;
			font-family: Arial;
			padding-top:15px;
			padding-bottom: 15px;
			margin-bottom: 	5px;
			border-bottom: 	0.9px #EBF2F7 dotted;
			border-radius: 5px;
			background-color: #b7e3ff;
			width: 	65%

		}

		.indflight_details
		{
			padding-left:90px;
			padding-right: 60px;
			font-weight: 450;
			font-size:14px;


		}

		.indflight_details1
		{
			padding-left:90px;
			padding-right: 60px;
			font-weight: 450;
			font-size:14px;


		}

		#bookNow
		{
			height:40px;
			width:50px;
			background-color: red;
			color:white;
			position: relative;
			padding-left: 5px;
			/*font-family: Adobe Heiti Std R;*/
			font-family: Candara;
			font-weight: 400;
			float:right;
			display: inline-block;	
			margin-right: 350px;
			top: -50px;
			border-radius: 5px;
			border: 1px black dotted;
			/*margin-bottom: -50px;*/
		}

		#filter
		{
			height:20px;
			width:50px;
			background-color: blue;
			color:white;
			position: relative;
			padding-left: 5px;
			/*font-family: Adobe Heiti Std R;*/
			font-family: Candara;
			font-weight: 400;
			float:right;
			display: inline-block;	
			margin-right: 1100px;
			top: -19px;
			border-radius: 5px;
			border: 1px black dotted;
			/*margin-bottom: -50px;*/
		}

		#cost_filter
		{
			height:20px;
			width:50px;
			background-color: blue;
			color:white;
			position: relative;
			padding-left: 5px;
			/*font-family: Adobe Heiti Std R;*/
			font-family: Candara;
			font-weight: 400;
			float:right;
			display: inline-block;	
			margin-right: 1000px;
			top: -40px;
			border-radius: 5px;
			border: 1px black dotted;
			/*margin-bottom: -50px;*/
		}
		#cost_text_filter
		{
			height:20px;
			width:120px;
			/*background-color: blue;*/
			/*color:white;*/
			position: relative;
			padding-left: 5px;
			/*font-family: Adobe Heiti Std R;*/
			font-family: Candara;
			font-weight: 400;
			float:right;
			display: inline-block;	
			margin-right: -150px;
			top: 0px;
			border-radius: 5px;
			border: 1px black solid;
			margin-bottom: -50px;
		}

		#duration_filter
		{
			height:20px;
			width:60px;
			background-color: blue;
			color:white;
			position: relative;
			padding-left: 5px;
			/*font-family: Adobe Heiti Std R;*/
			font-family: Candara;
			font-weight: 400;
			float:right;
			display: inline-block;	
			margin-right: 760px;
			top: -60px;
			border-radius: 5px;
			border: 1px black dotted;
			/*margin-bottom: -50px;*/
		}

		#duration_text_filter
		{
			height:20px;
			width:145px;
			/*background-color: blue;*/
			/*color:white;*/
			position: relative;
			padding-left: 5px;
			/*font-family: Adobe Heiti Std R;*/
			font-family: Candara;
			font-weight: 400;
			float:right;
			display: inline-block;	
			margin-right: -170px;
			top: -20px;
			border-radius: 5px;
			border: 1px black solid;
			margin-bottom: -50px;
		}
		#submit_filter
		{
			height:40px;
			width:80px;
			background-color: green;
			color:white;
			position: relative;
			padding-left: 5px;
			/*font-family: Adobe Heiti Std R;*/
			font-family: Candara;
			font-weight: 400;
			float:right;
			display: inline-block;	
			margin-right: 490px;
			top: -88px;
			border-radius: 5px;
			border: 1px black dotted;
			/*margin-bottom: -50px;*/
		}
		.container
		{
			padding-left: 30px;
		}

	</style>
</head>

<body>
	
	<div class="topbar">
	<div id="a"><h1> Traveler's Bliss</h1> </div>
	</div>

<div class="container">

	<!-- <div id="blr">Bangalore </div>
	<img id="toandfro" src="https://upload.wikimedia.org/wikipedia/commons/1/1e/Airplane_silhouette.png">
	<div id="syd">Sydney </div>

	<div id="depart">Departure <b>10/11/2018 </b></div>
	<div id="return1">Return <b>10/12/2018</b> </div>
	<div id="adults">Adults : <b>2 </b></div>
	<div id="children">Children : <b>0</b></div>
	<div id="infants">Infants : <b>0</b></div>

	<hr width="1370px" color="red">

	<div id="flight_results">Flight Results : <b>8</b></div>
	<div id="filter"> Filters : </div> -->

	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<div id="cost_filter">
		<label for="cost_filter"> Cost </label>
		<input type="text" id="cost_text_filter" name="cost_text_filter" placeholder="Enter Maximum Cost" >
		
	</div>
	<div id="duration_filter">
		<label for="duration_filter"> Duration </label>
		<input type="text" id="duration_text_filter" name="duration_text_filter" placeholder="Enter Maximum Duration" >
		
	</div>

	<input type="submit" id="submit_filter" value="Apply Filters">
	</form>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<?php
		
    	if($_SERVER["REQUEST_METHOD"] == "POST")
    	{	
            $a=0;
            $servername = "localhost";
            $username = "root";
            $pass = "";
            $conn = mysqli_connect($servername, $username, $pass);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                }
            $sql = "CREATE DATABASE IF NOT EXISTS Tourism";
            if(mysqli_query($conn,$sql))
            {
                 // echo "DATABASE created successfully";
            }
            else
            {
                 // echo "epic fail 100";
            }    		
    		$servername = "localhost";
            $username = "root";
            $pass = "";
            $dbname="Tourism";
            $conn = mysqli_connect($servername, $username, $pass, $dbname);

         
            

            $sql0="CREATE table if not exists flights (f_id int(5) primary key, f_name varchar(30) not null, f_cost int(20) not null,f_time_arrival varchar(20) not null,f_time_dept varchar(20) not null, f_dur int(20))";
         	 if(mysqli_query($conn,$sql0))
            {
                 // echo "Table flights created successfully";
            }
            else
            {
                 // echo "epic fail flights   ". mysqli_error($conn);
            }   
            $sql20="INSERT IGNORE INTO flights VALUES(45000,'Indian Aeroflow',114938,'23:15','10:45',31),(45001,'Fly Emirates',114938,'11:55','22:45',15),(45002,'Air Australia',127876,'21:05','20:30',18),(45003,'Qantas Air',128834,'03:35','06:15',22),(45004,'Indigo Air',128834,'22:15','20:45',26),(45006,'Indian Aeroflow',214550,'19:45','18:35',27),(45007,'Fly US',228114,'22:15','18:45',24),(45008,'Air Australia',314376,'21:45','18:35',25)";

            if(mysqli_query($conn,$sql20))
            {
                 // echo "Table flights inserted successfully   ";
            }
            else
            {
                 // echo "flights values fail".mysqli_error($conn);
            }

            $cost_filter=1024*1024;
            $duration_filter=1024*1024;
            if(!empty($_POST['cost_text_filter'])) 
			{
  				$cost_filter=$_POST['cost_text_filter'];
			}
			if(!empty($_POST['duration_text_filter'])) 
			{
  				$duration_filter=$_POST['duration_text_filter'];
			}
			// echo "$cost_filter<br>";
			// echo "$duration_filter";

           
            

            $sql_select="SELECT f_id, f_name,f_cost,f_time_arrival,f_time_dept,f_dur FROM flights WHERE f_cost<=$cost_filter AND f_dur<=$duration_filter ORDER BY f_cost" ;
            $result=$conn->query($sql_select);
            if ($result->num_rows > 0) 
            {	
            	echo "<br>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Flight_ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "."Flight Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "."Cost &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "."Arrival &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "."Departure &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "."Duration &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "."<br>";
            	$b=1;
            	// echo "<form action='' id='form2' method='post'>";
            	while($row = $result->fetch_assoc()) 
            	{
            		echo  "<div id='flight_details' class='button_cost$b'>" ."<span class='indflight_details'>".$row["f_id"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row["f_name"]. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row["f_cost"]. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row["f_time_arrival"]. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row["f_time_dept"]. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row["f_dur"]. "</span> </div> ";
            		$b=$b+1;
            	}
            	
            }
        }

        else
        {

            $a=0;
            $servername = "localhost";
            $username = "root";
            $pass = "";
            $conn = mysqli_connect($servername, $username, $pass);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                }
            $sql = "CREATE DATABASE IF NOT EXISTS Tourism";
            if(mysqli_query($conn,$sql))
            {
                 // echo "DATABASE created successfully";
            }
            else
            {
                 // echo "epic fail 100";
            }    		
    		$servername = "localhost";
            $username = "root";
            $pass = "";
            $dbname="Tourism";
            $conn = mysqli_connect($servername, $username, $pass, $dbname);

         
            

            $sql0="CREATE table if not exists flights (f_id int(5) primary key, f_name varchar(30) not null, f_cost int(20) not null,f_time_arrival varchar(20) not null,f_time_dept varchar(20) not null, f_dur int(20))";
         	 if(mysqli_query($conn,$sql0))
            {
                 // echo "Table flights created successfully";
            }
            else
            {
                 // echo "epic fail flights   ". mysqli_error($conn);
            }   
            $sql20="INSERT IGNORE INTO flights VALUES(45000,'Indian Aeroflow',114938,'23:15','10:45',31),(45001,'Fly Emirates',114938,'11:55','22:45',15),(45002,'Air Australia',127876,'21:05','20:30',18),(45003,'Qantas Air',128834,'03:35','06:15',22),(45004,'Indigo Air',128834,'22:15','20:45',26),(45006,'Indian Aeroflow',214550,'19:45','18:35',27),(45007,'Fly US',228114,'22:15','18:45',24),(45008,'Air Australia',314376,'21:45','18:35',25)";

            if(mysqli_query($conn,$sql20))
            {
                 // echo "Table flights inserted successfully   ";
            }
            else
            {
                 // echo "flights values fail".mysqli_error($conn);
            }

            // $cost_filter=$_POST['cost_text_filter'];
            // $duration_filter=$_POST['duration_text_filter'];

            $sql_select="SELECT f_id, f_name,f_cost,f_time_arrival,f_time_dept,f_dur FROM flights";
            $result=$conn->query($sql_select);
            if ($result->num_rows > 0) 
            {	
            	echo "<br>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Flight_ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "."Flight Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "."Cost &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "."Arrival &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "."Departure &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "."Duration &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "."<br>";
            	$b=1;
            	while($row = $result->fetch_assoc()) 
            	{
            		echo  "<div id='flight_details' class='cost_data$b'>" ."<span class='indflight_details'>".$row["f_id"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row["f_name"]. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row["f_cost"]. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row["f_time_arrival"]. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row["f_time_dept"]. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row["f_dur"]. "</span> </div> ";
            		$b=$b+1;
            	}
            }

        }

    ?>		
	
	<form action="" method="post">
		<label for="select_flight"> Enter Flight ID of the flight you want to choose </label><br>
		<input type="text" id="select_flight" name="select_flight" required><br>
		<label for="select_date"> Enter Departure Date </label><br>
		<input type="date" id="select_date" name="select_date" required><br>
		<label for="indc"> Enter Source City </label><br>
		<input list="IndCities" name="indc" id="indc1" required><br>
		<datalist id="IndCities" name="IndCities">
					<option>New Delhi</option>
					<option selected>Bengaluru</option>
					<option>Kolkata</option>
					<option>Mumbai</option>
					<option>Ahmedabad</option>
					<option>Chennai</option>
		</datalist>
		<label for="ozc"> Enter Destination City </label><br>
		<input name="ozc" list="OzCities" id="ozc" required><br>
			<datalist id="OzCities" name="OzCities">
					<option>Melbourne</option>
					<option selected>Sydney</option>
					<option>Canberra</option>
					<option>Perth</option>
					<option>Adelaide</option>
					<option>Brisbane</option>
				
			</datalist>

		<input type="submit" name="submit2" value="Submit" required>
	</form>
	<?php
		$alert=0;
		// Use isset($_POST["name"])
		// if( $_POST['submit2'] ) 
		if( isset($_POST['submit2'] ) )
		{
			$servername = "localhost";
            $username = "root";
            $pass = "";

            $conn = mysqli_connect($servername, $username, $pass);
			
			if (!$conn) {
                // die("Connection failed: " . mysqli_connect_error());
                die("Connection failed: " );
                }

            $sql = "CREATE DATABASE IF NOT EXISTS Tourism";
            if(mysqli_query($conn,$sql))
            {
                 // echo "Table created successfully";
            }
            else
            {
                 // echo "epic fail 100";
            }

            $selected_flight=$_POST['select_flight'];
            $selected_date=$_POST['select_date'];
            $depart_city=$_POST['indc'];
            $arrival_city=$_POST['ozc'];
            // echo "<br>$selected_flight<br>";

         	$dbname="Tourism";


            $servername = "localhost";
            $username = "root";
            $pass = "";
            // $dbname = "oshin";
            // // Create connection
            
            $conn = mysqli_connect($servername, $username, $pass, $dbname);
		               
            $user_id=$_SESSION['U_ID'];
         	// echo $user_id;   

            $sql0="CREATE TABLE IF NOT EXISTS BOOKS(F_ID INT(5) UNIQUE, U_ID VARCHAR(30) UNIQUE,Dept_Date DATE NOT NULL CHECK (DATE(Dept_Date)>getdate()), SOURCE VARCHAR(20) NOT NULL,DESTINATION VARCHAR(20) NOT NULL,FOREIGN KEY(F_ID) REFERENCES flights(f_id),FOREIGN KEY(U_ID) REFERENCES USER(u_id),primary key(F_ID,U_ID))";


    		$sql1="INSERT INTO BOOKS VALUES('$selected_flight','$user_id','$selected_date','$depart_city','$arrival_city')";

    		if(mysqli_query($conn,$sql0))
            {
                 // echo "<br>books created successfully";
            }
            else
            {
                 // echo "<br>books1 fail".mysqli_error($conn);
            }     

            if(mysqli_query($conn,$sql1))
            {
                 // echo "<br>books inserted successfully";
                 $_SESSION['F_ID']=$selected_flight;
                 $alert=202;

            }
            else
            {
                 // echo "<br>books2 fail".mysqli_error($conn);
                 $alert=404;

            }       


		}

	?>

	<script type="text/javascript">
		var alert1=<?php echo $alert;	?>;
		if(alert1==404)
		{
			alert("Please Enter Valid flight Id");
			console.log(alert1);
		}
		else if(alert1==202)
		{
			window.open("HPackage 3.php","_self");
		}
	</script>


	






</body>
</html>