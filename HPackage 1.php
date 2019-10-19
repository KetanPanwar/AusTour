<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Package 1</title>
  <link rel="stylesheet" type="text/css" href="project1.css">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="icon" type="image/jpg" href="logo.jpg">
</head>    
<body background-color: palegoldenrod>
<h2 style="text-align:center; font-family: agency FB">Your Current Packae</h2>
<h1 style="text-align:center; font-family: agency FB">Please Select Hotels For Your Stay</h1> 
<h2 style="text-align:center; font-family: agency FB">Night 1</h2>
<div class="container">
  <div class="mySlides" align="middle">
    <div class="numbertext">1 / 6</div>
    <img src="primussydney - Copy.png" style="width:100%" >
  </div>
  <div class="mySlides" align="middle">
    <div class="numbertext">2 / 6</div>
    <img src="skyrider - Copy.png" style="width:100%" >
  </div>
  <div class="mySlides" align="middle">
    <div class="numbertext">3 / 6</div>
    <img src="crowneplaza - Copy.png" style="width:100%">
  </div>    
  <div class="mySlides" align="middle">
    <div class="numbertext">4 / 6</div>
    <img src="oakspacific - Copy.png" style="width:100%">
  </div>
  <div class="mySlides" align="middle">
    <div class="numbertext">5 / 6</div>
    <img src="panpacific - Copy.png" style="width:100%">
  </div>    
  <div class="mySlides" align="middle">
    <div class="numbertext">6 / 6</div>
    <img src="rydgessouthbank - Copy.png" style="width:100%">
  </div>    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>
  <div class="caption-container">
    <p id="caption"></p>
  </div>
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="primussydney.png" style="width:100%" onclick="currentSlide(1)" alt="Hotel Primus Sydney">
    </div>
    <div class="column">
      <img class="demo cursor" src="skyrider.png" style="width:100%" onclick="currentSlide(2)" alt="Hotel Rider Motor Inn Blue Mountains">
    </div>
    <div class="column">
      <img class="demo cursor" src="crowneplaza.png" style="width:100%" onclick="currentSlide(3)" alt="Hotel Crowne Plaza">
    </div>
    <div class="column">
      <img class="demo cursor" src="oakspacific.png" style="width:100%" onclick="currentSlide(4)" alt="Hotel Oaks Pacific Blue Port Stephens">
    </div>
    <div class="column">
      <img class="demo cursor" src="panpacific.png" style="width:100%" onclick="currentSlide(5)" alt="Hotel Pan Pacific">
    </div>    
    <div class="column">
      <img class="demo cursor" src="rydgessouthbank.png" style="width:100%" onclick="currentSlide(6)" alt="Hotel Rydges South Bank">
    </div>
  </div>
</div>
<button type="button" id="booking" class="block">Confirm Your Booking</button>
<form action= "<?php echo $_SERVER ['PHP_SELF'];?>"method="post">
  <input type="radio" name="night1" class="cb" value="Primus Sydney">Primus Sydney&nbsp;
  <input type="radio" name="night1" class="cb" value="Sky Rider Motor Inn" checked="true">Hotel Rider Motor Inn Blue Mountains&nbsp;
  <input type="radio" name="night1" class="cb" value="Crowne Plazza Hunter Valley">Hotel Crowne Plaza&nbsp;
  <input type="radio" name="night1" class="cb" value="Oaks Pacific">Hotel Oaks Pacific Blue Port Stephens
  <input type="radio" name="night1" class="cb" value="Pan Pacific">Hotel Pan Pacific&nbsp;
  <input type="radio" name="night1" class="cb" value="Rydges South Bank">Hotel Rydges South Bank
<script>
var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
  showSlides(slideIndex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  var butto= document.getElementById("booking");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
  var keyi= dots[slideIndex-1].alt;
  butto.innerHTML='You Have Selected '+keyi+' For Night 1';
  localStorage.setItem("night1",keyi);
}
</script>


<h2 style="text-align:center; font-family: agency FB">Night 2</h2>
<div class="container">
  <div class="mySlides1" align="middle">
    <div class="numbertext">1 / 6</div>
    <img src="primussydney - Copy.png" style="width:100%" >
  </div>
  <div class="mySlides1" align="middle">
    <div class="numbertext">2 / 6</div>
    <img src="skyrider - Copy.png" style="width:100%" >
  </div>
  <div class="mySlides1" align="middle">
    <div class="numbertext">3 / 6</div>
    <img src="crowneplaza - Copy.png" style="width:100%">
  </div>    
  <div class="mySlides1" align="middle">
    <div class="numbertext">4 / 6</div>
    <img src="oakspacific - Copy.png" style="width:100%">
  </div>
  <div class="mySlides1" align="middle">
    <div class="numbertext">5 / 6</div>
    <img src="panpacific - Copy.png" style="width:100%">
  </div>    
  <div class="mySlides1" align="middle">
    <div class="numbertext">6 / 6</div>
    <img src="rydgessouthbank - Copy.png" style="width:100%">
  </div>    
  <a class="prev" onclick="plusSlides1(-1)">❮</a>
  <a class="next" onclick="plusSlides1(1)">❯</a>
  <div class="caption-container">
    <p id="caption1"></p>
  </div>
  <div class="row">
    <div class="column">
      <img class="demo1 cursor" src="primussydney.png" style="width:100%" onclick="currentSlide1(1)" alt="Hotel Primus Sydney">
    </div>
    <div class="column">
      <img class="demo1 cursor" src="skyrider.png" style="width:100%" onclick="currentSlide1(2)" alt="Hotel Rider Motor Inn Blue Mountains">
    </div>
    <div class="column">
      <img class="demo1 cursor" src="crowneplaza.png" style="width:100%" onclick="currentSlide1(3)" alt="Hotel Crowne Plaza">
    </div>
    <div class="column">
      <img class="demo1 cursor" src="oakspacific.png" style="width:100%" onclick="currentSlide1(4)" alt="Hotel Oaks Pacific Blue Port Stephens">
    </div>
    <div class="column">
      <img class="demo1 cursor" src="panpacific.png" style="width:100%" onclick="currentSlide1(5)" alt="Hotel Pan Pacific">
    </div>    
    <div class="column">
      <img class="demo1 cursor" src="rydgessouthbank.png" style="width:100%" onclick="currentSlide1(6)" alt="Hotel Rydges South Bank">
    </div>
  </div>
</div>
<button type="button" id="booking1" class="block">Confirm Your Booking</button>
<input type="radio" name="night2" class="cb" value="Primus Sydney" checked="true">Primus Sydney&nbsp;
  <input type="radio" name="night2" class="cb" value="Sky Rider Motor Inn">Hotel Rider Motor Inn Blue Mountains&nbsp;
  <input type="radio" name="night2" class="cb" value="Crowne Plazza Hunter Valley">Hotel Crowne Plaza&nbsp;
  <input type="radio" name="night2" class="cb" value="Oaks Pacific">Hotel Oaks Pacific Blue Port Stephens
  <input type="radio" name="night2" class="cb" value="Pan Pacific">Hotel Pan Pacific&nbsp;
  <input type="radio" name="night2" class="cb" value="Rydges South Bank">Hotel Rydges South Bank
<script>
var slideIndex = 1;
showSlides1(slideIndex);
function plusSlides1(n) {
  showSlides1(slideIndex += n);
}
function currentSlide1(n) {
  showSlides1(slideIndex = n);
}
function showSlides1(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides1");
  var dots = document.getElementsByClassName("demo1");
  var captionText = document.getElementById("caption1");
  var butto= document.getElementById("booking1");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
  var keyi= dots[slideIndex-1].alt;
  butto.innerHTML='You Have Selected '+keyi+' For Night 2';
  localStorage.setItem("night2",keyi);
}
</script>

<h2 style="text-align:center; font-family: agency FB">Night 3</h2>
<div class="container">
  <div class="mySlides2" align="middle">
    <div class="numbertext">1 / 6</div>
    <img src="primussydney - Copy.png" style="width:100%" >
  </div>
  <div class="mySlides2" align="middle">
    <div class="numbertext">2 / 6</div>
    <img src="skyrider - Copy.png" style="width:100%" >
  </div>
  <div class="mySlides2" align="middle">
    <div class="numbertext">3 / 6</div>
    <img src="crowneplaza - Copy.png" style="width:100%">
  </div>    
  <div class="mySlides2" align="middle">
    <div class="numbertext">4 / 6</div>
    <img src="oakspacific - Copy.png" style="width:100%">
  </div>
  <div class="mySlides2" align="middle">
    <div class="numbertext">5 / 6</div>
    <img src="panpacific - Copy.png" style="width:100%">
  </div>    
  <div class="mySlides2" align="middle">
    <div class="numbertext">6 / 6</div>
    <img src="rydgessouthbank - Copy.png" style="width:100%">
  </div>    
  <a class="prev" onclick="plusSlides2(-1)">❮</a>
  <a class="next" onclick="plusSlides2(1)">❯</a>
  <div class="caption-container">
    <p id="caption2"></p>
  </div>
  <div class="row">
    <div class="column">
      <img class="demo2 cursor" src="primussydney.png" style="width:100%" onclick="currentSlide2(1)" alt="Hotel Primus Sydney">
    </div>
    <div class="column">
      <img class="demo2 cursor" src="skyrider.png" style="width:100%" onclick="currentSlide2(2)" alt="Hotel Rider Motor Inn Blue Mountains">
    </div>
    <div class="column">
      <img class="demo2 cursor" src="crowneplaza.png" style="width:100%" onclick="currentSlide2(3)" alt="Hotel Crowne Plaza">
    </div>
    <div class="column">
      <img class="demo2 cursor" src="oakspacific.png" style="width:100%" onclick="currentSlide2(4)" alt="Hotel Oaks Pacific Blue Port Stephens">
    </div>
    <div class="column">
      <img class="demo2 cursor" src="panpacific.png" style="width:100%" onclick="currentSlide2(5)" alt="Hotel Pan Pacific">
    </div>    
    <div class="column">
      <img class="demo2 cursor" src="rydgessouthbank.png" style="width:100%" onclick="currentSlide2(6)" alt="Hotel Rydges South Bank">
    </div>
  </div>
</div>
<button type="button" id="booking2" class="block">Confirm Your Booking</button>
<input type="radio" name="night3" class="cb" value="Primus Sydney">Primus Sydney&nbsp;
  <input type="radio" name="night3" class="cb" value="Sky Rider Motor Inn">Hotel Rider Motor Inn Blue Mountains&nbsp;
  <input type="radio" name="night3" class="cb" value="Crowne Plazza Hunter Valley">Hotel Crowne Plaza&nbsp;
  <input type="radio" name="night3" class="cb" value="Oaks Pacific" checked="true">Hotel Oaks Pacific Blue Port Stephens
  <input type="radio" name="night3" class="cb" value="Pan Pacific">Hotel Pan Pacific&nbsp;
  <input type="radio" name="night3" class="cb" value="Rydges South Bank">Hotel Rydges South Bank

<script>
var slideIndex = 1;
showSlides2(slideIndex);
function plusSlides2(n) {
  showSlides2(slideIndex += n);
}
function currentSlide2(n) {
  showSlides2(slideIndex = n);
}
function showSlides2(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides2");
  var dots = document.getElementsByClassName("demo2");
  var captionText = document.getElementById("caption2");
  var butto= document.getElementById("booking2");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
  var keyi= dots[slideIndex-1].alt;
  
  butto.innerHTML='You Have Selected '+keyi+' For Night 3';
  localStorage.setItem("night3",keyi);

}
</script>


<h2 style="text-align:center; font-family: agency FB">Night 4</h2>
<div class="container">
  <div class="mySlides3" align="middle">
    <div class="numbertext">1 / 6</div>
    <img src="primussydney - Copy.png" style="width:100%" >
  </div>
  <div class="mySlides3" align="middle">
    <div class="numbertext">2 / 6</div>
    <img src="skyrider - Copy.png" style="width:100%" >
  </div>
  <div class="mySlides3" align="middle">
    <div class="numbertext">3 / 6</div>
    <img src="crowneplaza - Copy.png" style="width:100%">
  </div>    
  <div class="mySlides3" align="middle">
    <div class="numbertext">4 / 6</div>
    <img src="oakspacific - Copy.png" style="width:100%">
  </div>
  <div class="mySlides3" align="middle">
    <div class="numbertext">5 / 6</div>
    <img src="panpacific - Copy.png" style="width:100%">
  </div>    
  <div class="mySlides3" align="middle">
    <div class="numbertext">6 / 6</div>
    <img src="rydgessouthbank - Copy.png" style="width:100%">
  </div>    
  <a class="prev" onclick="plusSlides3(-1)">❮</a>
  <a class="next" onclick="plusSlides3(1)">❯</a>
  <div class="caption-container">
    <p id="caption3"></p>
  </div>
  <div class="row">
    <div class="column">
      <img class="demo3 cursor" src="primussydney.png" style="width:100%" onclick="currentSlide3(1)" alt="Hotel Primus Sydney">
    </div>
    <div class="column">
      <img class="demo3 cursor" src="skyrider.png" style="width:100%" onclick="currentSlide3(2)" alt="Hotel Rider Motor Inn Blue Mountains">
    </div>
    <div class="column">
      <img class="demo3 cursor" src="crowneplaza.png" style="width:100%" onclick="currentSlide3(3)" alt="Hotel Crowne Plaza">
    </div>
    <div class="column">
      <img class="demo3 cursor" src="oakspacific.png" style="width:100%" onclick="currentSlide3(4)" alt="Hotel Oaks Pacific Blue Port Stephens">
    </div>
    <div class="column">
      <img class="demo3 cursor" src="panpacific.png" style="width:100%" onclick="currentSlide3(5)" alt="Hotel Pan Pacific">
    </div>    
    <div class="column">
      <img class="demo3 cursor" src="rydgessouthbank.png" style="width:100%" onclick="currentSlide3(6)" alt="Hotel Rydges South Bank">
    </div>
  </div>
</div>
<button type="button" id="booking3" class="block">Confirm Your Booking</button>
<input type="radio" name="night4" class="cb" value="Primus Sydney">Primus Sydney&nbsp;
  <input type="radio" name="night4" class="cb" value="Sky Rider Motor Inn">Hotel Rider Motor Inn Blue Mountains&nbsp;
  <input type="radio" name="night4" class="cb" value="Crowne Plazza Hunter Valley">Hotel Crowne Plaza&nbsp;
  <input type="radio" name="night4" class="cb" value="Oaks Pacific">Hotel Oaks Pacific Blue Port Stephens
  <input type="radio" name="night4" class="cb" value="Pan Pacific">Hotel Pan Pacific&nbsp;
  <input type="radio" name="night4" class="cb" value="Rydges South Bank" checked="true">Hotel Rydges South Bank
<script>
var slideIndex = 1;
showSlides3(slideIndex);
function plusSlides3(n) {
  showSlides3(slideIndex += n);
}
function currentSlide3(n) {
  showSlides3(slideIndex = n);
}
function showSlides3(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides3");
  var dots = document.getElementsByClassName("demo3");
  var captionText = document.getElementById("caption3");
  var butto= document.getElementById("booking3");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
  var keyi= dots[slideIndex-1].alt;
  butto.innerHTML='You Have Selected '+keyi+' For Night 4';
  localStorage.setItem("night4",keyi);
}
</script>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
                            
    <div class="navbar-header">
                         
    <a class="navbar-brand" href="#"><img src="logo.jpg" width="30px" style="display:inline;margin-top: -5px;margin-right: 10px;">Traveler's Bliss</a>
    </div>
      <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Flights</a></li>
      <li><a href="#">Hotels</a></li>
      <li><a href="#">Packages</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>
      </ul>
    </div>
</nav>
<input type="submit" id="proceed" class="block" value="Proceed" onclick="handle1()">
<script>
function handle1()
            {
                window.open("package 1.html","_blank");
            }
</script>
<?php
    		
            // $_SESSION["U_ID"]="ketan35";
            // $_SESSION["F_N"]="ket";
            $userID=$_SESSION["U_ID"];
            $a=0;
            $servername ="localhost";
            $username = "root";
            $pass = "";

            $conn = mysqli_connect($servername, $username, $pass);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                }
            $sql = "CREATE DATABASE IF NOT EXISTS tourism";
            if(mysqli_query($conn,$sql))
            {
            }
            else
            {
            }
            $dbname="tourism";
            $servername = "localhost";
            $username = "root";
            $pass = "";            
            $conn = mysqli_connect($servername, $username, $pass, $dbname);
           
            $sql1 = "CREATE TABLE IF NOT EXISTS hotel 
            (h_id INT , rent FLOAT(10), type VARCHAR(10), h_name VARCHAR(30) PRIMARY KEY, h_add VARCHAR(100), rating INT(10))";  

            if(mysqli_query($conn,$sql1))
            {
                // echo "Table created successfully";
            }
            else
            {
                // echo "epic fail 1";
            }

            $sql2 = "INSERT IGNORE INTO hotel VALUES(1010,11212.00,'Deluxe','Primus Sydney','25-Ave Lane , Masali Road, Sydney',4)";          
            
            // mysqli_query($conn,$sql2);

            if(mysqli_query($conn,$sql2))
            {	
            	// $a=1;
                // echo "successful";

            }
            else
            {	
                // echo "epic fail 2 ".mysqli_error($conn);
            }

            $sql2 = "INSERT IGNORE INTO hotel VALUES(1011,13990.00,'Deluxe',' Crowne Plazza Hunter Valley ','25/4, Sector 27, Hunter  Valley',5)";          
            
            // mysqli_query($conn,$sql2);

            if(mysqli_query($conn,$sql2))
            {	
            	// $a=1;
                // echo "";

            }
            else
            {	
                // echo "epic fail 2 ".mysqli_error($conn);
            }

            $sql2 = "INSERT IGNORE INTO hotel VALUES(1012,12452.00,'Deluxe',' Hilton Cairns ','4th Block, Resant Road, Cairns',5)";          
            
            // mysqli_query($conn,$sql2);

            if(mysqli_query($conn,$sql2))
            {	
            	// $a=1;
                // echo "";

            }
            else
            {	
                // echo "epic fail 2 ".mysqli_error($conn);
            }

            $sql2 = "INSERT IGNORE INTO hotel VALUES(1013,7244.00,'Deluxe','Oaks Pacific','63-Stephens Yard , Bar Land Blue Port  Stephens',3)";          
            
            // mysqli_query($conn,$sql2);

            if(mysqli_query($conn,$sql2))
            {	
            	// $a=1;
                // echo "";

            }
            else
            {	
                // echo "epic fail 2 ".mysqli_error($conn);
            }

            $sql2 = "INSERT IGNORE INTO hotel VALUES(1014,17092.00,'Deluxe','Pan Pacific','CP, Park Rock Road,Melbourne',5)";          
            
            // mysqli_query($conn,$sql2);

            if(mysqli_query($conn,$sql2))
            {	
            	// $a=1;
                // echo "";

            }
            else
            {	
                // echo "epic fail 2 ".mysqli_error($conn);
            }

            $sql2 = "INSERT IGNORE INTO hotel VALUES(1015,12512.00,'Deluxe','Rydges South Bank','45-69 Block, Rhets Road,Brisbane',4)";          
            
            // mysqli_query($conn,$sql2);

            if(mysqli_query($conn,$sql2))
            {	
            	// $a=1;
                // echo "";

            }
            else
            {	
                // echo "epic fail 2 ".mysqli_error($conn);
            }

            $sql2 = "INSERT IGNORE INTO hotel VALUES(1016,5249.00,'Deluxe','Sky Rider Motor Inn','34 Town Hall , Shining Street, Blue Mountains',3)";          
            
            // mysqli_query($conn,$sql2);

            if(mysqli_query($conn,$sql2))
            {	
            	// $a=1;
                // echo "";

            }
            else
            {	
                // echo "epic fail 2 ".mysqli_error($conn);
            }

            $sql2 = "INSERT IGNORE INTO hotel VALUES(1017,11108.00,'Deluxe','Sofitel Gold Coast BroadBeach','85-34 Sector 89,Sisters Charity Road',5)";          
            
            // mysqli_query($conn,$sql2);

            if(mysqli_query($conn,$sql2))
            {	
            	// $a=1;
                // echo "";

            }
            else
            {	
                // echo "epic fail 2 ".mysqli_error($conn);
            }
            ?>
            </form>
            <?php
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
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
            $night_1=$_POST["night1"];
            $night_2=$_POST["night2"];
            $night_3=$_POST["night3"];
            $night_4=$_POST["night4"];
            
            $dbname="Tourism";

            $conn = mysqli_connect($servername, $username, $pass, $dbname);
            $sql1="CREATE TABLE IF NOT EXISTS selects
            (u_id VARCHAR(30) NOT NULL, h_name VARCHAR(30) NOT NULL,nightno INT NOT NULL, FOREIGN KEY (u_id) REFERENCES USER (U_ID), PRIMARY KEY(u_id,h_name,nightno)) ";

if(mysqli_query($conn,$sql1))
{
    // echo "Table created successfully";
} 
else
{
    // echo "epic fail 1".mysqli_error($conn);
}
$sql2 = "INSERT  INTO selects VALUES ('$userID', '$night_1', 1)";
 if(mysqli_query($conn,$sql2))
 {  
     // echo "Table successfully 1 insert";

 }
 else
 {  
    //  echo "epic fail 2 ".mysqli_error($conn);
 }

$sql3 = "INSERT INTO selects VALUES ('$userID', '$night_2', 2)";
 if(mysqli_query($conn,$sql3))
 {  
     // echo "insert 2 successfully";

 }
 else
 {  
     // echo "epic fail 2 ".mysqli_error($conn);
 }

$sql4 = "INSERT INTO selects VALUES ('$userID', '$night_3', 3)";
 if(mysqli_query($conn,$sql4))
 {  
      // echo "Table successfully";

 }
 else
 {  
      // echo "epic fail 2 ".mysqli_error($conn);
 }

$sql5 = "INSERT INTO selects VALUES ('$userID', '$night_4', 4)";
 if(mysqli_query($conn,$sql5))
 {  
      // echo "Table successfully";

 }
 else
 {  
      // echo "epic fail 2 ".mysqli_error($conn);
 }
}
?> 
                
</body>
</html>
