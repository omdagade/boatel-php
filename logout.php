<?php
    session_start();
    unset($_SESSION['checklogindetail']);
    unset($_SESSION['checkabc']);
    unset($_SESSION['loginname']);
    echo "<script>alert('Logout Successful'); location.replace('http://localhost:3000/index.php')</script>";


?>