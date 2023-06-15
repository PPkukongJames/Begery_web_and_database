<?php 
    session_start();
    include('server.php');
    echo "<br/>สวัสดีคุณ : ".$_SESSION['username']."<br/><br/>";

?>


<!DOCTYPE html>
<style>
    body{
        font-family: 'Itim', cursive;
        text-align: center;
        font-size: 26px;
    }
    </style>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment</title>
</head>
<link href="detail.css" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
<body>
    <link href="detail.css" rel="stylesheet" type="text/css">
        <link href="top-header.css" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <body>
        <div class="header">
            <img id="logo_top" draggable="false" src="home/img_home.jpg">
            <div class="header-right">
                <div class="searchbox">
                    <form action="Search.php" method="get"> 
                        <input type="text" placeholder=" Search...." name="search"> 
                        <button type="submit" >Submit</button> 
                    </form>
                </div>
                <a href="Profile.php">
                    &emsp;&emsp;&emsp;<img border = '0' src="home/user.png"  width="60" height="60" hspace=10 >
                </a>
                <a href="MyCart.php">
                   <img border = '0' src="home/shopping-cart.png"  width="60" height="60">&emsp;&emsp;&emsp;
                </a>
            </div>
        </div>

        <div class="topnav">
            <a href="first.php">Home</a>
            <a href="Contact.html">Contact</a>
            <a href="money.php">แจ้งการชำระเงิน</a>
        </div>
    <br>
    <div align="center">
        <img src="home/kbank.png" width="75" height="75">
        <p> ธนาคารกสิกรไทย </p>
        <p> เลขบัญชี xxx-x-xxxxx-x</p>
        <p> นาย ใจดี รักเรียน</p>
    </div>
    <br> <br> <br>
    <a href="https://docs.google.com/forms/d/1xS1u01j6y5-5VHxEiFnEJPrrURpTxBreBLqmPGLt0d4/prefill" target="_blank">แจ้งการชำระเงิน</a>
    
</body>
</html>