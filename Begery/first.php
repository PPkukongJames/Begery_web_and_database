<?php 
    session_start();
    include('server.php');
    echo "<br/>สวัสดีคุณ : ".$_SESSION['username']."<br/><br/>";

    $White_Bread = "SELECT Mnum FROM white_bread";
    $Holweet = "SELECT Mnum FROM whole_wheat_bread";
    $croissant = "SELECT Mnum FROM croissant";
    $Baguette = "SELECT Mnum FROM baguette";

    $White_Bread = mysqli_query($conn,$White_Bread);
    $Holweet = mysqli_query($conn,$Holweet);
    $croissant = mysqli_query($conn,$croissant);
    $Baguette = mysqli_query($conn,$Baguette);

    $NW=0;
    $NH=0;
    $NC=0;
    $NB=0;
    while($result=mysqli_fetch_row($White_Bread)){
        $NW=$NW+$result[0];
    }
    while($result=mysqli_fetch_row($Holweet)){
        $NH=$NH+$result[0];
    }
    while($result=mysqli_fetch_row($croissant)){
        $NC=$NC+$result[0];
    }
    while($result=mysqli_fetch_row($Baguette)){
        $NB=$NB+$result[0];
    }

?>


<!DOCTYPE html>

<html>
    <title>Home</title>
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
        

        <div id="Promote">
            <h1><ins>ส่วนประกาศของทางร้าน</ins></h1>
            <h4 style="font-size: 25px;">&emsp;&emsp;&emsp;&emsp;ยินดีต้อนรับสู่ร้านเบเกอร์รี่ Brain free ขอบคุณที่เข้ามาอุดหนุนและใช้บริการของพวกเรา ขนมปังของทางร้านเรานั้นทำสดใหม่ทุกวัน ขอให้สนุกกับการเลือกสินค้าน้าา<3 </h4>
        </div>
        <h1 style="font-family: 'Itim', cursive;font-size: 40px;">&nbsp&nbsp&nbsp&nbsp<ins>สินค้า</ins></h1>
        <p>
            <div class="buy" >
                <br>
                <img src="home/White_Bread.jpg" width="250" height="175">
                <br><h2 style="font-family: 'Itim', cursive;font-size: 40px;" >White bread</h2>
                <h1>80 ฿</h1>
                <a class="buy-p" href="White_Bread.php">ซื้อ</a>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <p style="color: red;text-align: left;display: inline-block;font-family: 'Itim', cursive;">
                    เหลือสินค้าอยู่ <?php echo $NW; ?> ชิ้น
                </p>
            </div>
            &nbsp&nbsp&nbsp&nbsp
            <div class="buy">
                <br>
                <img src="home/Holweet.jpg" width="250" height="175">
                <br><h2 style="font-family: 'Itim', cursive;font-size: 40px;"2>Holweet</h2>
                <h1>80 ฿</h1>
                <a class="buy-p" href="Holweet.php">ซื้อ</a>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <p style="color: red;text-align: left;display: inline-block;font-family: 'Itim', cursive;">
                    เหลือสินค้าอยู่ <?php echo $NH; ?> ชิ้น
                </p>

            </div>
            &nbsp&nbsp&nbsp&nbsp
            <div class="buy">
                <br>
                <img src="home/croissant.jpg" width="250" height="175">
                <br><h2 style="font-family: 'Itim', cursive;font-size: 40px;">Croissant</h2>
                <h1>80 ฿</h1>
                <a class="buy-p" href="croissant.php">ซื้อ</a>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <p style="color: red;text-align: left;display: inline-block;font-family: 'Itim', cursive;">
                    เหลือสินค้าอยู่ <?php echo $NC; ?> ชิ้น
                </p>
            </div>
            &nbsp&nbsp&nbsp&nbsp
            <div class="buy">
                <br>
                <img src="home/Baguette.jfif" width="250" height="175">
                <br><h2 style="font-family: 'Itim', cursive;font-size: 40px;">Baguette</h2>
                <h1>80 ฿</h1>
                <a class="buy-p" href="Baguette.php">ซื้อ</a>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <p style="color: red;text-align: left;display: inline-block;font-family: 'Itim', cursive;">
                    เหลือสินค้าอยู่ <?php echo $NB; ?> ชิ้น
                </p>
            </div>
        </p>
    </body>
</html>