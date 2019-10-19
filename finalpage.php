<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bill and Info</title>
        <link rel="stylesheet" href="lastpage.css">
        <link rel="stylesheet" href="css/bs.css">
        <link rel="icon" type="image/jpg" href="images/logo.jpg">
        <style>

        #newtext
        {
            font-family: Agency FB;
            font-weight: bold;
            padding: 30px;
            font-size: 20px;
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
                <li class="active"><a href="Tourism.html">Home</a></li>
                <li><a href="search_flights.php">Flights</a></li>
                <li><a href="hotel package3.html">Hotels</a></li>
                <li><a href="package 3.html">Packages</a></li>
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
            <h1>Account Information : </h1>
            <p id="newtext"> Name:  <?php echo $_SESSION['F_N'];?></p>
            <p id="newtext"> User Id: <?php echo $_SESSION['U_ID'];?></p>
            <p id="newtext"> Email: <?php echo $_SESSION['Eml'];?></p>
            <p id="newtext"> Contact: <?php echo $_SESSION['Contact'];?></p>
            <p id="newtext"> Address: <?php echo $_SESSION['Address'];?></p>

                
            <!-- <section>
                <input type="textbox" placeholder="Enter Feedback">
            </section> -->
        </div>
        <?php
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
                 echo "epic fail 100";
            }           
            $servername = "localhost";
            $username = "root";
            $pass = "";
            $dbname="Tourism";
            $conn = mysqli_connect($servername, $username, $pass, $dbname);

            $usrid=$_SESSION['U_ID'];

            $sql_select="SELECT f_cost FROM flights,BOOKS WHERE BOOKS.U_ID=$usrid AND BOOKS.F_ID=flights.f_id";
            if(mysqli_query($conn,$sql_select))       
            {   
                
                 echo "Coitus done successfully";
            }
            else
            {   
                 echo "epic fail 2 ".mysqli_error($conn);
            }
            $result=$conn->query($sql_select);
            $f_cost=0;
            if ($result->num_rows>0) 
            {   
                while($row = $result->fetch_assoc()) 
                {
                    $f_cost=$row["f_cost"];
                    // echo "<br>hello".$row["f_cost"];
                }
            }






        ?>
        <div id="container">
            <h1>Final Bill : </h1>
            <p id="newtext"> Flight Amount: <?php echo  $f_cost; ?></b></p>
            <p id="newtext"> Package Amount: <?php echo  $_SESSION["Package_Amt"]; ?></p>
            <p id="newtext"> Hotel Amount: <?php echo  $_SESSION["Hotel_Amt"]; ?></p>
            <p id="newtext"> Total Amount: <?php $total=$f_cost+$_SESSION["Package_Amt"]+$_SESSION["Hotel_Amt"]; echo $total;  ?></p>
            <!-- <section>
                <input type="textbox" placeholder="Enter Feedback">
            </section> -->
        </div>

    </body>
</html>