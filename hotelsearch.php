<?php
require_once("db.php");

session_start();
if (!isset($_SESSION['checkabc'])) {
    echo "<script>alert('PLZ LOGIN FIRST!!'); location.replace('http://localhost:3000/index.php')</script>";
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Boatel</title>
</head>

<body>
    <header>
    <div class="head1">
            <img id='limg' src="logo.png" alt="">
            <img id="signimg" src="user-interface.png" alt="">
            <p id="makevisible"></p>
            <?php
            if(isset($_SESSION['checklogindetail'])){
                if($_SESSION['checklogindetail']==true){
                echo '<a id="indexlogout" href="logout.php">Logout</a>' ;
                
                }
                else{
                    echo '<a id="makeunvisib" href="login.php" id="anchorimg><p id=" losign">Login/Signup</p></a>';
                }
            }
            else{
                $_SESSION['checklogindetail']=false;
                echo '<a id="makeunvisib" href="login.php" id="anchorimg><p id=" losign">Login/Signup</p></a>';
                
            }
            
            ?>
            
        </div>

        <div class="head2">
            <a id="hele" href="index.php">Home</a>
            <a id="hele" href="aboutus.html">About Us</a>
            <a id="hele" href="contactus.php">Contact Us</a>
            <a id="hele" href="bookings.php">Your Bookings</a>
        </div>
    </header>
    <main>
        <div class="overalldiv">
            <div>
            <p id="searchtname">
                <?php
                $hotelname =explode("+",$_POST["btn"])[0];
                $hotelname=str_replace("-"," ",$hotelname);
                $pinn=explode("+",$_POST["btn"])[1];
                echo $hotelname;
                
                $_SESSION["hotelname"]=$hotelname;
                $_SESSION["pincode"]=$pinn;
                
                
                
                ?>
            </p>
            <form action="validatebooking.php" method="post">
            
            <label id="searchformlabel" for="date">Select Date</label>
            <input id="searchdate" name="date" type="date" required>
            <label id="searchformlabel"  for="time">Select Time</label>
            <input id="searchtime" name="time" pattern="[0-9]{2}:[0-9]{2}" type="time" required>
            
            <input name="searchpagebtn" id="searchpagebtn" type="submit" value="Book Now">
            </form>

            </div>
        </div>

        

        
    </main>
    <div class="footer">
        <div class="footerele">
            <div class="foot1">
                <h3 id="ftele1">ABOUT</h3>
                <p id="ft1">Boatel is a global platform that empowers entrepreneurs and small businesses with hotels and homes by providing full stack technology that increases earnings and eases operations. Bringing affordable and trusted accommodation that guests can book instantly.</p>
            </div>
            <div class="foot1">
                <h3 id="ftele1">QUICK LINKS</h3>
                <a href="index.php"><p id="ftp1">HOME</p></a>
                <a href="aboutus.html"><P id="ftp1">ABOUT US</P></a>
                <a href="contactus.php"><P id="ftp1">CONTACT US</P></a>
                <a href="bookings.php"><P id="ftp1">MY BOOKINGS</P></a>

            </div>
            <div class="foot1">
                <h3 id="ftele1">CONTACT US</h3>
                <p id="ftp2"> +91 9456345673</p>

            </div>

        </div>
        <div class="ftpp">
            <p id="ftp3">Copyright &#169 2022 Om Dagade. All Rights Reserved</p>

        </div>
    </div>
    </div>
</body>

</html>