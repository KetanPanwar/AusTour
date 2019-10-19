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

	<div id="blr">Bangalore </div>
	<img id="toandfro" src="https://upload.wikimedia.org/wikipedia/commons/1/1e/Airplane_silhouette.png">
	<div id="syd">Sydney </div>

	<div id="depart">Departure <b>10/11/2018 </b></div>
	<div id="return1">Return <b>10/12/2018</b> </div>
	<div id="adults">Adults : <b>2 </b></div>
	<div id="children">Children : <b>0</b></div>
	<div id="infants">Infants : <b>0</b></div>

	<hr width="1370px" color="red">

	<div id="flight_results">Flight Results : <b>8</b></div>
	<br>
	<div id="sections"><span class="indsections">Depart</span> <span class="indsections">Duration</span> <span class="indsections">Arrival</span><span class="indsections"> Cost</span> </div>

	<div id="flight_details"> <span class="indflight_details"> 23:15</span> <span class="indflight_details">31h 0m (2 stops)</span> <span class="indflight_details">10:45</span><span class="indflight_details1"> <b>Rs. 114938</b></span></div>
	
	<button id="bookNow" onclick="bookNow1()">Book Now</button>
		
	<div id="flight_details"> <span class="indflight_details">11:55 </span><span class="indflight_details">15h 20m (1 stop)</span><span class="indflight_details"> 22:45</span> <span class="indflight_details1"><b>Rs. 114938</b></span></div>

	<button id="bookNow" onclick="bookNow2()">Book Now</button>

	<div id="flight_details"> <span class="indflight_details">21:05 </span><span class="indflight_details">18h 55m (1 stop) </span><span class="indflight_details">20:30</span> <span class="indflight_details1"><b>Rs. 127876</b></span></div>
	
	<button id="bookNow" onclick="bookNow3()">Book Now</button>

	<div id="flight_details"><span class="indflight_details"> 03:35</span> <span class="indflight_details">22h 10m (1 stop)</span> <span class="indflight_details">06:15 </span><span class="indflight_details1"><b>Rs. 128834</b></span></div>
	
	<button id="bookNow" onclick="bookNow4()">Book Now</button>

	<div id="flight_details"> <span class="indflight_details">22:15 </span><span class="indflight_details">26h 20m (2 stops)</span><span class="indflight_details">20:45</span> <span class="indflight_details1"><b>Rs. 128834</b></span></div>
	
	<button id="bookNow" onclick="bookNow5()">Book Now</button>

	<div id="flight_details"><span class="indflight_details"> 19:45 </span><span class="indflight_details">27h 20m (1 stop) </span><span class="indflight_details">18:35 </span><span class="indflight_details1"><b>Rs. 214550</b></span></div>
	
	<button id="bookNow" onclick="bookNow6()">Book Now</button>

	<div id="flight_details"> <span class="indflight_details">22:15 </span><span class="indflight_details">24h 20m (2 stops)</span><span class="indflight_details">18:45</span> <span class="indflight_details1"><b>Rs. 228114</b></span></div>
	
	<button id="bookNow" onclick="bookNow7()">Book Now</button>

	<div id="flight_details"><span class="indflight_details"> 21:45 </span><span class="indflight_details">25h 20m (1 stop) </span><span class="indflight_details">18:35 </span><span class="indflight_details1"><b>Rs. 314376</b></span></div>
	
	<button id="bookNow" onclick="bookNow8()">Book Now</button>
	
</div>


<script type="text/javascript">
	var e=document.getElementById("blr");
	e.textContent=localStorage.getItem("indc");
	
	var e1=document.getElementById("syd");
	e1.textContent=localStorage.getItem("ozc");

	var e1=document.getElementById("depart");
	e1.textContent="Departure "+localStorage.getItem("depart");

	// localStorage.getItem("depart").style.color="blue";
	// e1.textContent=localStorage.getItem("depart");
	// e1.textContent.style.color="blue";

	var e1=document.getElementById("return1");
	e1.textContent="Return "+localStorage.getItem("return");

	var e1=document.getElementById("adults");
	e1.textContent="Adults "+localStorage.getItem("adults");

	var e1=document.getElementById("children");
	e1.textContent="Children "+localStorage.getItem("children");
	
	var e1=document.getElementById("infants");
	e1.textContent="Infants "+localStorage.getItem("infants");

	function bookNow1()
	{	
		// var x=document.getElementById("bookNow").previousSibling

		var x=document.getElementsByClassName("indflight_details1")[0];
		localStorage.setItem("flight_cost",x.textContent);
		alert(x.textContent);
		window.open("package 1.html","_self");
		
	}

	function bookNow2()
	{	
		// var x=document.getElementById("bookNow").previousSibling

		var x=document.getElementsByClassName("indflight_details1")[1];
		localStorage.setItem("flight_cost",x.textContent);
		alert(x.textContent);
		window.open("package 1.html","_self");
		
	}

	function bookNow3()
	{	
		// var x=document.getElementById("bookNow").previousSibling

		var x=document.getElementsByClassName("indflight_details1")[2];
		localStorage.setItem("flight_cost",x.textContent);
		alert(x.textContent);
		window.open("package 1.html","_self");
		
	}

	function bookNow4()
	{	
		// var x=document.getElementById("bookNow").previousSibling

		var x=document.getElementsByClassName("indflight_details1")[3];
		localStorage.setItem("flight_cost",x.textContent);
		alert(x.textContent);
		window.open("package 1.html","_self");
		
	}

	function bookNow5()
	{	
		// var x=document.getElementById("bookNow").previousSibling

		var x=document.getElementsByClassName("indflight_details1")[4];
		localStorage.setItem("flight_cost",x.textContent);
		alert(x.textContent);
		window.open("package 1.html","_self");
		
	}

	function bookNow6()
	{	
		// var x=document.getElementById("bookNow").previousSibling

		var x=document.getElementsByClassName("indflight_details1")[5];
		localStorage.setItem("flight_cost",x.textContent);
		alert(x.textContent);
		window.open("package 1.html","_self");
		
	}

	function bookNow7()
	{	
		// var x=document.getElementById("bookNow").previousSibling

		var x=document.getElementsByClassName("indflight_details1")[6];
		localStorage.setItem("flight_cost",x.textContent);
		alert(x.textContent);
		window.open("package 1.html","_self");
		
	}

	function bookNow8()
	{	
		// var x=document.getElementById("bookNow").previousSibling

		var x=document.getElementsByClassName("indflight_details1")[7];
		localStorage.setItem("flight_cost",x.textContent);
		alert(x.textContent);
		window.open("package 1.html","_self");
		
	}
</script>
	






</body>
</html>