<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Reviews</title>
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
            flex: 2 1 30px;
            /* background-color:lightgray; */
            font-family: Agency FB;
            font-size: 3em;
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
        #sort
        {
            padding: 1.5em;
            border-radius: 1em;
            background-color:lightgray;
            margin-top:1em;
        }
        .userd
        {
            font-size: 1.5em;
            padding-right: 1em;
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
            <h1>Reviews : </h1>
            <div class="fc">
        <p class="first">
            <!-- <?php echo $_SERVER['PHP_SELF'];?> -->
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <input id="sort" type="Submit" value="Sort By Rating">
            </form>
            <!-- <button id="sort">Sort By Rating</button> -->
        </p>
        <p class="second"> Filter By: </p>
    </div>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Tourism";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "SELECT u_id, rating, cmt FROM feedback ORDER BY rating DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<p class='userd'><span class='usere'>UserId: &nbsp;&nbsp;&nbsp;&nbsp;</span>".$row["u_id"]. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='usere'>Rating:&nbsp;&nbsp;&nbsp;&nbsp;</span> " . $row["rating"]. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='usere'>Comment:&nbsp;&nbsp;&nbsp;&nbsp;</span> " . $row["cmt"]."</p>";
        
        // echo  $row["u_id"]. " " . $row["rating"]. " " . $row["cmt"]. "<br>";
    }
} else {
    // echo "0 results";
}
$conn->close();
        
    }
else
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Tourism";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT u_id, rating, cmt FROM feedback";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<p class='userd'><span class='usere'>UserId: &nbsp;&nbsp;&nbsp;&nbsp;</span>".$row["u_id"]. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='usere'>Rating:&nbsp;&nbsp;&nbsp;&nbsp;</span> " . $row["rating"]. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='usere'>Comment:&nbsp;&nbsp;&nbsp;&nbsp;</span> " . $row["cmt"]."</p>";
        
        // echo  $row["u_id"]. " " . $row["rating"]. " " . $row["cmt"]. "<br>";
    }
} else {
    // echo "0 results";
}
$conn->close();
}
?>    
        </div>
    </body>
</html>