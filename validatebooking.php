<?php
    require("db.php");
    
    session_start();

    $res=mysqli_query($con,"select * from ".$_SESSION["pincode"]." where hotelname='".$_SESSION["hotelname"]."'");
    $rowe=mysqli_fetch_array($res);
    $qwer="insert into bookings values('".$_SESSION['loginname']."','".$_SESSION["hotelname"]."','". $rowe["hoteladd"]."','".$_POST["date"]."','".$_POST["time"]."')";
    mysqli_query($con,$qwer);
    echo "<script>alert('Booking Successful');
    location.replace('http://localhost:3000/index.php')</script>";

