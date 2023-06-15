<?php 
    session_start();
    include('server.php');
    echo "<br/>สวัสดีคุณ : ".$_SESSION['username']."<br/><br/>";

    $croissant = "SELECT Mnum FROM croissant";
    $croissant = mysqli_query($conn,$croissant);
    $NC=0;
    while($result=mysqli_fetch_row($croissant)){
        $NC=$NC+$result[0];
    }

?>

<!DOCTYPE html>

<html>
    <title>Croissant</title>
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
        
        <h1 style="font-size: 40px;font-family: 'Itim', cursive;display: inline-block;">&emsp;&emsp;Croissant</h1><br>
        <div>

        <img style="padding: 5px ;background-color: #ffeed4;display: inline-block;" src="home/croissant.jpg" width="500" height="350" align=left hspace=75>
        </div>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <div id="product">
            ราคา&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp80&nbspบาท<br><br>
            สถานะสินค้า<br><br>
            เหลือสินค้าอยู่&emsp;&emsp;<?php echo $NC;?>&nbspชิ้น <br><br>
            <hr>
            <form  action="AddToCart.php" method="get">
            <label for="quantity">จำนวน &emsp;&emsp;:</label>
            <input style="font-size: 20px;font-family: 'Itim', cursive;" type="number" name="NBread" min="1" max="<?php $NC;?>"><br><br>&emsp;&emsp;
            <input type="hidden" name="Bread" value="croissant">
            <button style="font-size: 25px;font-family: 'Itim', cursive;" type="submit" name="OK" class="btn">หยิบใส่ตระกร้า</button></form>
        </div>
        <br clear=left>
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <div id="product">
            1 ห่อประกอบด้วยขนมปัง 1 ชิ้น<br><br>
            อายุสินค้า 3 วัน<br><br>
            <ins>คำเตือน</ins>&nbspมีส่วนประกอบของ&nbspนมวัว&nbspไข่ขาว&nbspแป้งสาลี
        </div>
    </body>
</html>
        
