<?php 
    session_start();
    include('server.php');
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
    <title>profile</title>
    <link href="detail.css" rel="stylesheet" type="text/css">
        <link href="top-header.css" rel="stylesheet" type="text/css">
        <link href="box-style.css" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <body>
    <div class="header">
            <img id="logo_top" draggable="false" src="home/img_home.jpg">
            <div class="header-right">
                
                <a href="Profile_admin.php">
                    &emsp;&emsp;&emsp;<img border = '0' src="home/user.png"  width="60" height="60" hspace=10 >
                </a>
                <a href="Logout.php">
                   <img border = '0' src="home/logout.png"  width="60" height="60">&emsp;&emsp;&emsp;
                </a>
            </div>
        </div>
        <div class="topnav">
            <a href="admin.php">Admin</a>
            <a href="addProduct.php">เพิ่มสินค้า</a>
            <a href="downProduct.php">ลดสินค้า</a>
            <a href="CheckOrder.php">รายการสินค้า</a>
        </div>
        <!---------------------- end header ------------------>
        <div class="profile-form">
            <div class="content">
                <h1>ข้อมูลส่วนตัว</h1>
            <?php 
                $Myuser = mysqli_fetch_row($Profile); 
                echo "<br> User ID &nbsp&nbsp&emsp;: ".$Myuser[0];
                echo "<br> Email&emsp;&emsp; : ".$Myuser[2];
                echo "<br> Firsename : ".$Myuser[3];
                echo "<br> Surname &nbsp&nbsp&nbsp: ".$Myuser[4];
                echo "<br> Address &emsp;: ".$Myuser[5].' '.$Myuser[6].' '.$Myuser[7].' '.$Myuser[8].' '.$Myuser[9];?>
                <div align='center'>
                <br>
                <button onclick="window.location.href='/begery/EditProfile_admin.php'">แก้ไขข้อมูลส่วนตัว</button>
                </div>
            </div>
        </div>
        <div class="profile-form">
            <div class="content">
            <h2>เบอร์โทรศัพท์</h2>
            <?php
                $i=1;
                while($P=mysqli_fetch_row($Phone)){
                    echo "<br>Phone ".$i."&nbsp&nbsp&nbsp&emsp;: 0".$P[0];
                    $i++;
            }
            echo '<br>';
            ?>
            <div class="searchbox">
                <br>
                <form style="display: inline-block;" action="Phone_admin.php" method="get"> 
                    <input id="textbox" type="tel" name="del" placeholder=" เบอร์โทรศัพท์ที่ต้องการลบ..."> 
                    <button type="submit" >ลบเบอร์โทรศัพท์</button> 
                </form>
            </div>
            <br><br><br><br><br><br>
            <div class="searchbox">
                <form style="display: inline-block;" action="Phone_admin.php" method="get"> 
                    <input id="textbox" type="tel" name="phone" placeholder=" เบอร์โทรศัพท์ที่ต้องการเพิ่ม..."> 
                    <button type="submit" >เพิ่มเบอร์โทรศัพท์</button> 
                </form>
            </div>
        </div>
        </div>
    </body>
</html>


