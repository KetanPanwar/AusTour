<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Traveler's Bliss- Australian Tour Packages</title>
        <link rel="stylesheet" href="Tourism.css">
        <link rel="stylesheet" href="css/bs.css">
        <link rel="icon" type="image/jpg" href="images/logo.jpg">
    </head>
    <?php
            // $_SESSION["U_ID"]="Sneel44";
            // $_SESSION["F_N"]="Subhranil";
            $userN=$_SESSION["F_N"];
            $servername = "localhost";
            $username = "root";
            $pass = "";
            $_SESSION["package1"]=10000;
            $_SESSION["package2"]=15000;
            $_SESSION["package3"]=20000;
            
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
            $sql1="CREATE TABLE IF NOT EXISTS package
            (p_id VARCHAR(5) PRIMARY KEY , p_name VARCHAR(10), Amt INT) ";
            if(mysqli_query($conn,$sql1))
            {
                // echo "Table created successfully";
            }
            else
            {
                // echo "epic fail 1";
            }
            $sql2 = "INSERT INTO package VALUES ('1001', 'Package 1', 10000)";
             if(mysqli_query($conn,$sql2))
             {	
                //  echo "Table successfully";
                
             }
             else
             {	
                //  echo "epic fail 2 ".mysqli_error($conn);
             }
             $sql3 = "INSERT INTO package VALUES ('1002', 'Package 2', 15000)";
             if(mysqli_query($conn,$sql3))
             {	
                //  echo "Table successfully";
                
             }
             else
             {	
                //  echo "epic fail 2 ".mysqli_error($conn);
             }
             $sql4 = "INSERT INTO package VALUES ('1003', 'Package 3', 20000)";
             if(mysqli_query($conn,$sql4))
             {	
                //  echo "Table successfully";
                
             }
             else
             {	
                //  echo "epic fail 2 ".mysqli_error($conn);
             }
        ?>
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
                        <li><a href="signup_page.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login_page.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="contact.html"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>
                      </ul>
                    </div>
                  </nav>
        <header style="padding-top: 10vh;">
            <p><span id="onea">Discover </span><span id="oneb">Paradise </span><span id="onec">In </span><span id="oned">Australia </span></p>
            <p class="meow" style="margin-left: 18em; margin-top: 1em; font-size: 0.5em; font-family: Agency FB">Hello, <?php echo $userN ?> </p>

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
            <p id="header">Australia > Tour Packages</p>
            <div id="pack1">
                <h1 id="pack1a">Economy Package</h1>
                <h1 id="pack1b" align="center">5days & 4 Nights </h1>
            </div>
            <img src="images/kang.png" alt="Kangaroo Photo">
            <section id="high">
                <p>Highlights:-</p>
                <ul>
                    <li>Sydney</li>
                    <li>Blue Mountains</li>
                    <li>Hunter Valley</li>
                    <li>Port Stephens</li>
                    <li>New Castle And Lake Macquarie</li>
                    <!-- <li>one</li> -->
                </ul>
            </section>
            <div id="no"> 
            Enter The No of Guests: <input type="number">
            <button id="selectp" onclick="handler1()" href="search_flights.php">Select Package</button>
            </div>
        </div>
        <div id="container2">
            <p id="header2">Australia > Tour Packages</p>
            <div id="pack2">
                <h1 id="pack2a">Standard Package</h1>
                <h1 id="pack2b" align="center">7days & 6 Nights</h1>
            </div>
            <img src="images/coral.jpg" alt="Kangaroo Photo">
            <section id="high2">
                <p>Highlights:-</p>
                <ul>
                    <li>Brisbane</li>
                    <li>Gold Coast-Excursion to Sea World</li>
                    <li>Movie World</li>
                    <li>Sydney-Show Boat Dinner Cruise</li>
                    <li>Blue Mountain Tour</li>
                </ul>
            </section>
            <div id="no2"> 
            Enter The No of Guests: <input type="number">
            <button id="selectp2" onclick="handler2()">Select Package</button>
            </div>
        </div>
        <div id="container3">
            <p id="header3">Australia > Tour Packages</p>
            <div id="pack3">
                <h1 id="pack3a">Deluxe Package</h1>
                <h1 id="pack3b" align="center">10days & 9 Nights</h1>
            </div>
            <img src="images/opera.jpg" alt="Kangaroo Photo">
            <section id="high3">
                <p>Highlights:-</p>
                <ul>
                    <li>Melbourne</li>
                    <li>Philip Island</li>
                    <li>Gold Coast</li>
                    <li>Sea World</li>
                    <li>Warner Bros Movie World</li>
                    <li>Skydive @ Byron Bay</li>
                    <li>Cairns</li>
                    <li>Sydney-Show Boat Dinner Cruise</li>
                    <li>Magical Manly and Beyond</li>
                    <li>Featherdale Park</li>
                </ul>
            </section>
            <div id="no3"> 
            Enter The No of Guests: <input type="number">
            <button id="selectp3" onclick="handler3()">Select Package</button>
            </div>
        </div>
        
        <script>
            function handler1()
            {
                 localStorage.setItem("pack","1");
                window.open("temp_search_flights1.php","_self");
            }
            function handler2()
            {
                localStorage.setItem("pack","2");
                window.open("temp_search_flights2.php","_self");
            }
            function handler3()
            {
                localStorage.setItem("pack","3");
                window.open("temp_search_flights3.php","_self");
            }
            
        </script>
    </body>
</html>