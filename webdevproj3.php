<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Flight Booking</title>
	<style type="text/css">
		h1
		{
			color:gold;
		}

		body
		{
			font-family: Agency FB;
			padding:0;
			margin:0;
			/*font-weight: 400;*/
			font-size: 20px;
			/*background-color: #2ecc11;*/
		}


		#image_form
		{
			background-image: url("http://www.auswildlife.com/wp-content/uploads/Boiling-Pot-Noosa-Australian-scenery.jpg");
			height:526px;
			width:100%;
			background-size: cover;
			margin-top:0px;
			clear:both;

		}
		#form
		{
			padding:20px;
			/*margin:70px;*/
		}
		
		#a
		{	
			color: gold;
			float:left;
			position:absolute;
			z-index:2;
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
			color:red;
		}

		#c
		{
			float:right;
			padding-right:0px;
			padding-top:30px;
			z-index:3;
			position:relative;
			right:-110px;
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
			right:-250px;
			top:45px;
			font-family: sans-serif;
			color:white;
		}

		.topbar
		{
			/*color:red;*/
			background-color: #262624;
			width: 100%;
			height:100px;
			font-family: Bradley Hand ITC;

		}

		button
		{
			background-color: #1293cf;
			border-radius: 15px;
			width:20%;
			margin-right: 80px;
			/*height: 50px;*/
			/*padding-right: 75px;*/
			/*color:white;*/
		}

		button:hover
		{
			box-shadow: 0 0 50px 100px #00d7c3 inset, 0 0 20px 2px #00d7c3;
		}

		#buttontext
		{
			font-family: Agency FB;
			font-size: 20px;
			/*margin-right: 50px: */
		}

		.container
		{
			padding-left: 30px;
			border: 1px solid #133347;
			width:50%;
			height: 90%;
			border-radius: 40px;
			background-color: rgb(19, 51, 71,0.5)

		}


		#select1
		{

			color: #777;
		    padding-left: 10px;
		    margin: 10px;
		    margin-top: 12px;
		    margin-left: 18px;
		    width: 290px;
		    height: 20px;
		    border: 1px solid #c7d0d2;
		    border-radius: 2px;
		}

		/*#select1:hover{
			box-shadow: 0 0 10px 0 #abbcc6 inset, 0 0 20px 2px #abbcc6;    	
		}*/
	input[type=text],input[type=password], input[type=date], input[type=number], input[type=list], #indc1, #ozc1 {
	    color: #777;
	    padding-left: 10px;
	    margin: 10px;
	    margin-top: 12px;
	    margin-left: 18px;
	    width: 290px;
	    height: 20px;
	    border: 1px solid #c7d0d2;
	    border-radius: 2px;
	    
    }


    input[type=text]:hover, input[type=number]:hover, input[type=date]:hover, #indc1:hover, #ozc1:hover
    {
    	box-shadow: 0 0 10px 0 #abbcc6 inset, 0 0 20px 2px #abbcc6;    	
    }

	</style>
	
</head>
<?php
				$userN=$_SESSION["U_ID"];
				$servername = "localhost";
                $username = "root";
                $pass = "";
                $conn = mysqli_connect($servername, $username, $pass);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                }
            // Create database
            $sql = "CREATE DATABASE IF NOT EXISTS Tourism";
            if(mysqli_query($conn,$sql))
            {
                // echo "Table created successfully";
            }
            else
            {
                // echo "epic fail 1";
            }
                
            $dbname="Tourism";

            $conn = mysqli_connect($servername, $username, $pass, $dbname);
                    $sql1="CREATE TABLE IF NOT EXISTS chooses
                    (u_id VARCHAR(30) UNIQUE, p_id VARCHAR(5) UNIQUE, FOREIGN KEY (u_id) REFERENCES USER	(u_id), FOREIGN KEY(p_id) REFERENCES package(p_id), PRIMARY KEY(u_id,p_id) )";
        
        if(mysqli_query($conn,$sql1))
        {
            // echo "Table created successfully";
        }
        else
        {
            // echo "epic fail 1".mysqli_error($conn);
        }
        $sql2 = "INSERT INTO chooses  VALUES('$userN', '1003')";
         if(mysqli_query($conn,$sql2))
         {	
             echo "Insert successfully";
        
         }
         else
         {	
             echo "epic fail 2 ".mysqli_error($conn);
         }
                ?>
<body>
	<div class="topbar">
	<div id="a"><h1>Traveler's Bliss</h1> </div>
<!-- 	<div id="b"><h3> Contact Us </h3> </div> 
	<div id="c"><h5> (+918296851087) </h5></div>
	<div id="d"><h5> oztravels@ozt.au </h5></div> -->
	</div>
	<div id="image_form">

	<div class="container">
	<!-- <img src="http://www.auswildlife.com/wp-content/uploads/Boiling-Pot-Noosa-Australian-scenery.jpg" width=1400px height=200px> -->
	<div id="form">
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<!-- 		<label><b>One way</b><input type="radio" name="WayButton"></label>

		<label><b>Round trip</b><input type="radio" name="WayButton"></label> -->
		
		<br><br>

		<label> From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input list="IndCities" name="indc" id="indc1" required>
		<datalist id="IndCities" name="IndCities">
					<option>New Delhi</option>
					<option selected>Bengaluru</option>
					<option>Kolkata</option>
					<option>Mumbai</option>
					<option>Ahmedabad</option>
					<option>Chennai</option>
		</datalist><br>
		</label>
		<label> To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input name="ozc" list="OzCities" id="ozc1" required>
			<datalist id="OzCities" name="OzCities">
					<option>Melbourne</option>
					<option selected>Sydney</option>
					<option>Canberra</option>
					<option>Perth</option>
					<option>Adelaide</option>
					<option>Brisbane</option>
				
			</datalist>
		</label>
		<br>
		<!-- <label>To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="To"></label><br><br> -->
		<label>Departure&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" id="depart" name="depart" required></label><br>
		<label>Return&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" id="return" name="return" required></label><br><br>
		<label>Adults (12+ Yrs) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="adults" id="adults" min=0 max=50 required></label><br>
		<label>Children(2-12 Yrs)<input type="number" name="children" min=0 max=50 id="children" required></label><br>
		<label>Infants(0-2 Yrs)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" id="infants" name="infants" min=0 max=50 required></label>
		<br><br>
		<button id="buttons" type="submit" value="Let's Fly!" name="Submit" onclick="openWebsite()"><b><span id="buttontext">Let's Fly</span></b> </button>
		<button id="buttons" type="reset" value="Reset" name="Reset"><b><span id="buttontext">Reset </span></b> </button>
		
	</form>
	</div>
	</div>
	</div>


	 <?php
    	if($_SERVER["REQUEST_METHOD"] == "POST")
    	{	
    		$ozc=$_POST['ozc'];
    		$indc=$_POST['indc'];
    		$depart=$_POST['depart'];
    		$return=$_POST['return'];
    		$adults=$_POST['adults'];
    		$children=$_POST['children'];
    		$infants=$_POST['infants'];
    	}	
    ?>


	<!-- <button onclick="openWebsite()" > HEllO </button> -->
	<script type="text/javascript">
		var a=1;
		function image_con()
		{	
			var b=a;
			// alert(b);
			// global var;	
			if(b%10==2)
			{
			document.getElementById('image_form').style.backgroundImage="url('https://wp-assets.futurism.com/2018/01/6903_Qantas_787_Dreamliner_Monkeys02_ExtremeLandscape_633x167.5_OOH_CMYK.jpg')";
			document.getElementById('image_form').style.height="526px";
			document.getElementById('image_form').style.width="100%";
			document.getElementById('image_form').style.widthbackgroundSize="cover";

			}
			else if(b%10==1)
			{
			document.getElementById('image_form').style.backgroundImage="url('http://www.auswildlife.com/wp-content/uploads/Boiling-Pot-Noosa-Australian-scenery.jpg')";
			document.getElementById('image_form').style.height="526px";
			document.getElementById('image_form').style.width="100%";
			document.getElementById('image_form').style.widthbackgroundSize="cover";
			}

			else if(b%10==3)
			{
			document.getElementById('image_form').style.backgroundImage="url('https://upload.wikimedia.org/wikipedia/commons/b/bf/Sunset_in_a_plane.JPG')";
			document.getElementById('image_form').style.height="526px";
			document.getElementById('image_form').style.width="100%";
			document.getElementById('image_form').style.widthbackgroundSize="cover";
			}

			else if(b%10==4)
			{
			document.getElementById('image_form').style.backgroundImage="url('http://studystayaustralia.com/wp-content/uploads/2018/07/maxresdefault.jpg')";
			document.getElementById('image_form').style.height="526px";
			document.getElementById('image_form').style.width="100%";
			document.getElementById('image_form').style.widthbackgroundSize="cover";
			}

			else if(b%10==5)
			{
			document.getElementById('image_form').style.backgroundImage="url('https://wordpress-network.prod.aws.skyscnr.com/wp-content/uploads/2018/05/GettyImages-486836087.jpg?w=1000&h=312&crop=1')";
			document.getElementById('image_form').style.height="526px";
			document.getElementById('image_form').style.width="100%";
			document.getElementById('image_form').style.widthbackgroundSize="cover";
			}

			else
			{
			document.getElementById('image_form').style.backgroundImage="url('https://s1.at.atcdn.net/wp-content/uploads/2017/02/iStock-157728558.jpg')";
			document.getElementById('image_form').style.height="526px";
			document.getElementById('image_form').style.width="100%";
			document.getElementById('image_form').style.widthbackgroundSize="cover";
			}

			a++;
			// console.log(a,b);
			
		}

		// function openWebsite()
		// {
		// 	window.open("https://www.google.com","_self");

		// }
		// function change_image()
		// {
			// setInterval(image_con,Math.random()*3);
		// }
		setInterval(image_con,(Math.random()*3000)+3000);
		// alert(a);
		// change_image();
	</script>

    <script type="text/javascript">
    	var ozc="<?php echo $ozc; ?>";
    	var indc="<?php echo $indc; ?>";
    	var depart="<?php echo $depart; ?>";
    	var return1="<?php echo $return; ?>";
    	var adults="<?php echo $adults; ?>";
    	var children="<?php echo $children; ?>";
    	var infants="<?php echo $infants; ?>";

    	localStorage.setItem("ozc",ozc);
    	localStorage.setItem("indc",indc);
    	localStorage.setItem("depart",depart);
    	localStorage.setItem("return",return1);
    	localStorage.setItem("adults",adults);
    	localStorage.setItem("children",children);
    	localStorage.setItem("infants",infants);

    	function openWebsite()
		{	
			if(ozc)
			{	
				// var e1=document.createElement('h1');
    			// document.body.appendChild(e1);
    			// e1.textContent=localStorage.getItem("age");
				window.open("search_flights3.php","_self");
			}
		}
    	openWebsite();
		
		// var e1=document.createElement('h1');
  //   	document.body.appendChild(e1);
  //   	e1.textContent=localStorage.getItem("indc");	
    	

    </script>

</body>
</html>		