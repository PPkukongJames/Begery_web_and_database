<?php 
    session_start();
    include('server.php');
    echo "<br/>สวัสดีคุณ : ".$_SESSION['username']."<br/><br/>";
    $UserID=$_SESSION['username'];
    $sql="SELECT * FROM track WHERE UserID='$UserID';";
    $Mytrack=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>

<html>
    <title>สถานะสินค้า</title>
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
                    <form> 
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
        
        <?php
            while($track=mysqli_fetch_row($Mytrack)){?>
                <div>
        <?php   $sql="SELECT * FROM bread WHERE Tracknumber='$track[0]';";
                echo "<h1>Your track : ".$track[0]."</h1>";
                $Total=0;
                $Mybread=mysqli_query($conn,$sql);
                    echo "<h2>";
                    while($bread=mysqli_fetch_row($Mybread)){
                        echo "<u>".$bread[1]."</u> / price :".$bread[2]."<br><br>";
                        $Total=$Total+$bread[2];
                    }
                echo "Status : ".$track[3]."<br>";
                echo "<br>ยอดชำระ : ".$Total." บาท</h2><hr><br>";

            } ?>
         </div>
</body>
</html>