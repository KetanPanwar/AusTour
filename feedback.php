<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Rating</title>
        <link rel="stylesheet" href="contact.css">
        <link rel="stylesheet" href="css/bs.css">
        <link rel="icon" type="image/jpg" href="images/logo.jpg">
        <style>
        body
        { 
            margin:0px;
        }
        .fc
        {
            display: flex;
            flex-flow: row-reverse wrap;
        }
        
        #container p {
            margin:10px;
            padding:20px; 
            border-radius: 10px;
        }
        .first
        {
            flex: 5 1 30px;
        }
        .second
        {
            flex: 3 1 30px;
            background-color:lightgray;
            font-family: Agency FB;
            font-size: 4em;
        }
        #rating-list
        {
            font-family: Agency FB;
            font-size: 1.5em;
        }

        table
        {
            font-size: 1.5em;
        }
        #one,#two,#three,#four,#five
        {
            font-family: Times New Roman;
        }
        
        
    </style>
    </head>
    <body>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                    <div class="container-fluid">
                            
                      <div class="navbar-header">
                          
                        <a class="navbar-brand" href="#"><img src="images/logo.jpg" width="30px" style="display:inline;margin-top: -5px;margin-right: 10px;">Traveler's Bliss</a>
                      </div>
                      <ul class="nav navbar-nav">
                      <li class="active"><a href="Tourism.php">Home</a></li>
                        <li><a href="search_flights.php">Flights</a></li>
                        <li><a href="hotel package3.html">Hotels</a></li>
                        <li><a href="package 3.html">Packages</a></li>
                        <li><a href="feedback.php">Rating</a></li>
                        <li><a href="reviews.php">Feedback</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>
                      </ul>
                    </div>
                  </nav>
                  <header style="padding-top: 10vh;">
                        <p><span id="onea">Discover </span><span id="oneb">Paradise </span><span id="onec">In </span><span id="oned">Australia </span></p>
                       
            
                    </header>
                    <div id="intro"style="margin-top: 5vh;">
                        <p align="center">Australia is a country and continent surrounded by the Indian and Pacific oceans. Its major cities – Sydney, Brisbane, Melbourne, Perth, Adelaide – are coastal. Its capital, Canberra, is inland. The country is known for its Sydney Opera House, the Great Barrier Reef, a vast interior desert wilderness called the Outback, and unique animal species like kangaroos and duck-billed platypuses</p>
                    </div>
                    <div id="inquiry">
                        <h1 align="center">Send an Inquiry</h1>
                        <form>
                        <section id="type">
                           <p> <input  type="radio" name="tour">Tour</p>
                            <p><input class="select" type="radio" name="ticket">Ticket</p>
                            <p><input   type="radio" name="visa">Visa</p>
                            <p><input class="select" type="radio" name="hotel">Hotel</p>
                        </section>
                        <input  class="text" type="text" placeholder="      Your Name" width="600">
                        <input class="text" type="text" placeholder="       Your Email-Id">
                        <input class="text" type="text" placeholder="      Your Mobile/Telephone No">
                        <input class="text" type="text" placeholder="       Your Location">
                        <input class="text" type="textbox" placeholder="        Your Queries">
                        <input id="inqsubmit" type="submit">
                        </form>
            
                    </div>
        <div id="container">
            <h1>Rating and Review : </h1>
            <div class="fc">
        <p class="first">
            <ul id="rating-list">
            <li>5:&nbsp;&nbsp;&nbsp;<span id="five">---------->25</span></li>
            <li>4:&nbsp;&nbsp;&nbsp;<span id="four">---------->25</span></li>
            <li>3:&nbsp;&nbsp;&nbsp;<span id="three">---------->25</span></li>
            <li>2:&nbsp;&nbsp;&nbsp;<span id="two">---------->25</span></li>
            <li>1:&nbsp;&nbsp;&nbsp;<span id="one">---------->25</span></li>
    </ul>
        </p>
        <p class="second" id="unique">  Rating: 4</p>
    </div>
    <!-- <?php echo $_SERVER['PHP_SELF'];?> -->
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <table style="border: 1px solid transparent">
                <tr>
            <td><label for="user_id">User-ID:</label></td>
           <td> <input type="text" id="user_id" name="user_id" required></td>
    </tr>
                <tr>
           <td> <label for="fname">First Name:</label></td>
            <td><input type="text" id="fname" name="fname" required></td>
    </tr>
            <tr>
            <td><label for="mname">Middle Name:</label></td>
            <td><input type="text" id="mname" name="mname"></td>
    </tr>
            <tr>
            <td><label for="lname">Last Name:</label></td>
            <td><input type="text" id="lname" name="lname" required></td>
    </tr>
            <tr>
            <td><label for="rating">Rating:</label></td>
           <td> <input type="number" id="rating" name="rating" required></td>
    </tr>
            <tr>
           <td> <label for="comment">Comments:</label></td>
            <td><input type="text" id="comment" name="comment" required></td>
    </tr>
    
            <div id="lower">
                <tr>
                    <td></td>
               <td><input type="submit" value="Submit" required></td>
            </div>

        </form>
    </div>

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
            $us_id=$_POST['user_id'];
            $rating=$_POST['rating'];
            $comment=$_POST['comment'];
            
            $dbname="Tourism";

            $conn = mysqli_connect($servername, $username, $pass, $dbname);
            $sql1="CREATE TABLE IF NOT EXISTS feedback
            (u_id VARCHAR(10) PRIMARY KEY , rating INT(5), cmt VARCHAR(50)) ";

if(mysqli_query($conn,$sql1))
{
    // echo "Table created successfully";
}
else
{
    // echo "epic fail 1";
}
$sql2 = "INSERT INTO feedback VALUES ('$us_id', '$rating', '$comment')";
 if(mysqli_query($conn,$sql2))
 {	
    //  echo "Table successfully";

 }
 else
 {	
    //  echo "epic fail 2 ".mysqli_error($conn);
 }
 $conn = new mysqli($servername, $username, $pass, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
 $sql3="SELECT ROUND(AVG(rating),1) AS AvgRating FROM feedback ";
 $result=$conn->query($sql3);
 if($result->num_rows >0)
 {
     $row=$result->fetch_assoc();
    //  echo $row["AvgRating"];
 }
 else
 {
    //  echo "0 results";  
 }
 $sql4="SELECT COUNT(*) AS five FROM feedback  WHERE rating=5";
 $result=$conn->query($sql4);
 if($result->num_rows >0)
 {
     $row5=$result->fetch_assoc();
    //  echo $row5["five"];
 }
 else
 {
    //  echo "0 results5";  
 }
 $sql5="SELECT COUNT(*) AS four FROM feedback  WHERE rating=4";
 $result=$conn->query($sql5);
 if($result->num_rows >0)
 {
     $row4=$result->fetch_assoc();
    //  echo $row4["four"];
 }
 else
 {
    //  echo "0 results4";  
 }
 $sql6="SELECT COUNT(*) AS three FROM feedback  WHERE rating=3";
 $result=$conn->query($sql6);
 if($result->num_rows >0)
 {
     $row3=$result->fetch_assoc();
    //  echo $row3["three"];
 }
 else
 {
    //  echo "0 results3";  
 }
 $sql7="SELECT COUNT(*) AS two FROM feedback  WHERE rating=2";
 $result=$conn->query($sql7);
 if($result->num_rows >0)
 {
     $row2=$result->fetch_assoc();
    //  echo $row2["two"];
 }
 else
 {
    //  echo "0 results2";  
 }
 $sql8="SELECT COUNT(*) AS one FROM feedback  WHERE rating=1";
 $result=$conn->query($sql8);
 if($result->num_rows >0)
 {
     $row1=$result->fetch_assoc();
    //  echo $row1["one"];
 }
 else
 {
    //  echo "0 results1";  
 }
 $conn->close();
        }
           
 ?>   
 <script>
    var a=<?php echo $row["AvgRating"] ?>;
    // alert(a);
    document.getElementById("unique").innerHTML="Rating: "+a;
    var b=<?php echo $row5["five"] ?>;
    document.getElementById("five").innerHTML="---------->"+b;
    var c=<?php echo $row4["four"] ?>;
    document.getElementById("four").innerHTML="---------->"+c;
    var d=<?php echo $row3["three"] ?>;
    document.getElementById("three").innerHTML="---------->"+d;
    var e=<?php echo $row2["two"] ?>;
    document.getElementById("two").innerHTML="---------->"+e;
    var f=<?php echo $row1["one"] ?>;
    document.getElementById("one").innerHTML="---------->"+f;
</script>        
        </div>
    </body>
</html>