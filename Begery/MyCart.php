<?php
     if(isset($_COOKIE["cart"])){
         $cart=$_COOKIE["cart"];
    }
    if(isset($_COOKIE["price"])){
         $price=$_COOKIE["price"];
    }

?>
<style>
    .Mycart{
    display: inline-block;
    font-family: 'Itim', cursive;
    background-color: #ffeed4;
    border-radius: 5px;
    margin: auto;
    margin-top: 10px;
    margin-bottom: 10px;
    border-bottom: 50px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    width: 575px;
    height: 180px;
}
</style>
<?php
    session_start();
    include('server.php');
    echo "<br/>สวัสดีคุณ : ".$_SESSION['username']."<br/><br/>";
    
?>
<!DOCTYPE html>

<html>
    <title>Cart</title>
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

        <?php $Total=0; ?>
        <h1>&emsp;&emsp;&emsp;&emsp;รายการสั่งซื้อ </h1>
        <?php if(isset($_COOKIE["cart"])){?>
        <div align=center>
        <?php if($cart[0]!=0){?>
        <div align=center class="Mycart">
            <br>
            <div align=left style="font-size: 25px;"><b>ขนมปังขาว</b></div><br clear="">
            <img align=left style="display: inline-block;" src="home/White_Bread.jpg" width="150" height="105" >
            <p style="display: inline-block;font-size: 30px;">จำนวน&nbsp<?php echo $cart[0]?>&nbspแถว&emsp;&emsp;ราคา&nbsp<?php echo $cart[0]*80;echo ' บาท';$Total=$Total+$cart[0]*80;?> </p>
            
            <form  action="AddToCart.php" method="get">
            <input type="hidden" name="Bread" value="white_bread">
            <input type="hidden" name="del" value="0">
            <a href="first.php">
            <button type="submit" name="OK" class="btn">ลบ</button></a></form>
        </div>
        <?php } ?>

        <?php if($cart[1]!=0){?>
        <div align=center class="Mycart">
            <br>
            <div align=left style="font-size: 25px;"><b>ขนมปังฝรั่งเศส</b></div><br clear="">
            <img align=left style="display: inline-block;" src="home/Baguette.jfif" width="150" height="105" >
            <p style="display: inline-block;font-size: 30px;">จำนวน&nbsp<?php echo $cart[1]?>&nbspชิ้น&emsp;&emsp;ราคา&nbsp<?php echo $cart[1]*80;echo ' บาท';$Total=$Total+$cart[1]*80;?> </p>
            <form  action="AddToCart.php" method="get">
            <input type="hidden" name="Bread" value="baguette">
            <input type="hidden" name="del" value="0">
            <a href="first.php">
            <button type="submit" name="OK" class="btn">ลบ</button></a></form>
        </div>
        <?php } ?>

        <?php if($cart[2]!=0){?>
        <div align=center class="Mycart">
            <br>
            <div align=left style="font-size: 25px;"><b>ขนมปังโฮลวีท</b></div><br clear="">
            <img align=left style="display: inline-block;" src="home/Holweet.jpg" width="150" height="105" >
            <p style="display: inline-block;font-size: 30px;">จำนวน&nbsp<?php echo $cart[2]?>&nbspชิ้น&emsp;&emsp;ราคา&nbsp<?php echo $cart[2]*80;echo ' บาท';$Total=$Total+$cart[2]*80;?> </p>
            <form  action="AddToCart.php" method="get">
            <input type="hidden" name="Bread" value="whole_wheat_bread">
            <input type="hidden" name="del" value="0">
            <a href="first.php">
            <button type="submit" name="OK" class="btn">ลบ</button></a></form>
        </div>
        <?php } ?>

        <?php if($cart[3]!=0){?>
        <div align=center class="Mycart">
            <br>
            <div align=left style="font-size: 25px;"><b>ครัวซองต์</b></div><br clear="">
            <img align=left style="display: inline-block;" src="home/croissant.jpg" width="150" height="105" >
            <p style="display: inline-block;font-size: 30px;">จำนวน&nbsp<?php echo $cart[3]?>&nbspชิ้น&emsp;&emsp;ราคา&nbsp<?php echo $cart[3]*80;echo ' บาท';$Total=$Total+$cart[3]*80;?> </p>
            <form  action="AddToCart.php" method="get">
            <input type="hidden" name="Bread" value="croissant">
            <input type="hidden" name="del" value="0">
            <a href="first.php">
            <button type="submit" name="OK" class="btn">ลบ</button></a></form>
        </div>
        <?php } ?></div>
        <?php } ?>
        <h2><?php echo "ราคารวม ".$Total." บาท"; ?></h2>
        <div align=center style="font-family: 'Itim', cursive;font-size: 25px;">
        <form  action="Order_db.php" method="get">
            <button type="submit" name="OK" class="btn">ยืนยันการสั่งซื้อ</button></form>
        </div>

    </body>
</html>
