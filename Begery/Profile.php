<?php 
    session_start();
    include('server.php');
    echo "<br/>สวัสดีคุณ : ".$_SESSION['username']."<br/><br/>";
    $UserID=$_SESSION['username'];
    $sql="SELECT * FROM userr WHERE UserID='$UserID'";
    $Profile=mysqli_query($conn,$sql);
    $sql="SELECT Phone FROM phone WHERE UserID='$UserID'";
    $Phone=mysqli_query($conn,$sql);
?>
    
<style>
#textbox{
    color: black;
    border-style:"solid";
    border-width:2px;
    border-color:red;
    outline: black;
    -webkit-box-box-shadow: inset #444;
    border: 2px solid skyblue;
    border-radius: 4px;

}
</style>
<!DOCTYPE html>

<html>
    <title>Profile</title>
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
        <br><br><br><br>
        <div style="font-size:40px">
            <?php 
                $Myuser = mysqli_fetch_row($Profile); 
                echo "<br>User ID &nbsp&nbsp&emsp;: ".$Myuser[0];
                echo "<br>Email&emsp;&emsp; : ".$Myuser[2];
                echo "<br>Firsename : ".$Myuser[3];
                echo "<br>Surname &nbsp&nbsp&nbsp: ".$Myuser[4];
                echo "<br>Address &emsp;: ".$Myuser[5].' '.$Myuser[6].' '.$Myuser[7].' '.$Myuser[8].' '.$Myuser[9];
                $i=1;
                while($P=mysqli_fetch_row($Phone)){
                    echo "<br>Phone ".$i."&nbsp&nbsp&nbsp&emsp;:".$P[0];
                    $i++;
                }
                echo '<br>';
            ?>
            <form style="display: inline-block;" action="Phone.php" method="get"> 
                <input id="textbox" type="tel" name="phone">
                <input type="submit" value="+เพิ่มเบอร์โทรศัพท์">
            </form>
            <br>
            <a href="MyOrder.php">ตรวจสอบคำสั่งซื้อ</a>
        </div>
        <br><br><br><br><br><br><br><br><br>
        <div align=center><a style="font-size:30px;" href="Logout.php">
        ออกจากระบบ   
        </a></div>
    </body>
</html>