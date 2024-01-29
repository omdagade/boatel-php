<?php
require_once("db.php");

session_start();
$_SESSION["hotelname"]="";
$_SESSION["pincode"]="";
mysqli_query($con,"Delete from bookings WHERE date < sysdate() - INTERVAL '1' DAY");



?>

<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boatel</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
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

        <p id="mainhead">Over 10000 Hotels across 10 Countries</p>
        <div class="searchhotel">
            <form method="post">
                <input type="text" name="pincode" id="pincode" placeholder="Enter Pincode">
                <button name="searchbtn" id="searchbtn">Search</button>
            </form>
        </div>

        <div class="madiv">
            <?php
            if (array_key_exists("searchbtn", $_POST)) {
                searchresult($con);
            }

            function searchresult($con)
            {

                $pincode = "t" . $_POST["pincode"];
                if (strlen($pincode) == 7) {
                    $qry = "select * from " . $pincode;
                    $res = mysqli_query($con, $qry);
                    while ($row = mysqli_fetch_array($res)) {
                        echo '<div class="hotellistingdiv">
            
                        <form class="formbook" action="hotelsearch.php" method="post">
                            <img class="hotellogo" src="hotel.png" alt="">
                            <div class="nameaddpricediv"><label name="hotelname" class="hotelname">' . $row["hotelname"] . '</p>
                            <p class="hoteladd" >' . $row["hoteladd"] . '</p>

                            <p class="hotelprice">Price-: ' . $row["price"] . '₹</p>
                            
                            </div>
                            <button class="booknowbtn" name="btn" value= ' . str_replace(" ", "-", $row["hotelname"]).'+'.$pincode.   ' type="submit">Book Now</button>
            
                        </form>
            
                    </div>';
                    }
                } else {
                    echo '<script>alert("Plz Enter correct value")</script>';
                }
            }

            ?>
        </div>

        <div class="main1">
            <img id="banner" src="banner.jpg" alt="">
        </div>
    </main>
    <div class="footer">
        <div class="footerele">
            <div class="foot1">
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
            <p id="ftp3" ">Copyright &#169 2022 Om Dagade. All Rights Reserved</p>
        </div>
    </div>
    </div>


    </div>
</body>

</html>