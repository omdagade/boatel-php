<?php
require_once('db.php');
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="fulllsdiv">
        <div id="lsdiv" class="loginsignupdiv">

            <a href="index.php"><img onclick="closels()" id="closelsdiv" src="close.png" alt="close"></a>

            <div class="loginregisterbtn">
                <button onclick="regclick()" id="registerbtn">Register</button>
                <button onclick="logclick()" id="loginbtn">Login</button>
                <script>
                    var regbtn = document.getElementsByClassName("registerdiv");
                    var loginbtn = document.getElementsByClassName("logindiv");

                    function regclick() {
                        loginbtn[0].style.display = "none";
                        regbtn[0].style.display = "block";
                    }

                    function logclick() {
                        loginbtn[0].style.display = "block";
                        regbtn[0].style.display = "none";
                        
                    }
                </script>
                <div class="logindiv">
                    <p id="logformp">LOGIN</p>
                    <form method="post">
                        
                        <input type="email" id="logineleemail" name="lemail" placeholder="Enter Your Email" required>
                        <input type="password" name="lpassword" id="loginelepass" placeholder="Enter your password" required>
                        <button id="loginsubmitbtn" type="submit" name="loginsubmitbtn">Submit</button>
                    </form>


                </div>

                <?php
                if (array_key_exists('loginsubmitbtn', $_POST)) {
                    $lemailsend = $_POST['lemail'];
                    $lpasssend = $_POST['lpassword'];
                    $loginquery = "select * from logindetails where email='" . $lemailsend . "' and password='" . $lpasssend . "'";
                    $resultquery = mysqli_query($con, $loginquery);
                    $rest = mysqli_num_rows($resultquery);
                    if ($rest == 1) {
                        echo "<script>alert('Login Successful'); location.replace('http://localhost:3000/index.php')</script>";
                        $_SESSION['checklogindetail']=true;
                        $_SESSION['loginname']=$lemailsend;
                        $_SESSION['checkabc']=true;

                    } else {
                        echo "<script>alert('Invalid Credentials'); </script>";
                    }
                }


                ?>
                <div class="registerdiv">
                    <form method="post">
                        <p id="regformp">REGISTER</p>
                        <input type="email" id="registereleemail" name="remail" placeholder="Enter Your Email" required>
                        <input type="password" name="rpassword" id="registerelepass" placeholder="Enter your password" required>
                        <button id="registersubmitbtn" name="registersubmitbtn">Submit</button>
                    </form>
                </div>

                <?php
                if (array_key_exists('registersubmitbtn', $_POST)) {
                    $remail = $_POST['remail'];
                    $rpass = $_POST['rpassword'];
                    $registerquery = "select * from logindetails where email='" . $remail .  "'";
                    $regresuquery = mysqli_query($con, $registerquery);
                    $regresult = mysqli_num_rows($regresuquery);
                    if ($regresult > 0) {
                        echo "<script>alert('You are already registered'); </script>";
                    }
                    if ($regresult == 0) {
                        $addquery = "insert into logindetails values('" . $remail . "','" . $rpass . "')";
                        mysqli_query($con,$addquery);
                        echo "<script>alert('Registration Successful... Plz Login'); </script>";
                    }
                }
                ?>
            </div>

        </div>
    </div>
</body>

</html