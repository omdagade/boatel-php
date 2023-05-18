<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            session_start();
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
        <p id="contact4">CONTACT US</p>

    <div id="contactdiv">
        <form action="">
        <input id="f1name" class="form1ele" type="text" placeholder="Enter Your Name" ><br>
        <input id="f1email" class="form1ele" type="email" placeholder="Enter Your Email" ><br>
        <input id="f1number" class="form1ele" type="number" placeholder="Enter Your Number" ><br>
        <input id="f1message" class="form1ele" type="text" placeholder="Enter Message" ><br>
        <button type="button" id="sub123" onclick="contactsubmitclick()">SUBMIT</button>
    </form>
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