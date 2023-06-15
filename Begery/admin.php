<?php 
    session_start();
    include('server.php');
?>
<!doctype html>
<style>
    .system{
        font-family: 'Itim', cursive;
        color: black;
        background-color:#ffeed4;
        font-size: 30px;
        display: inline-block;
        background-color: #ffeed4;
        border-radius: 10px;
        margin: auto;
        margin-top: 10px;
        margin-bottom: 10px;
        padding-top: 20px;
        border-bottom: 50px;
        padding-bottom: 20px;
        padding-left: 5px;
        padding-right: 5px;
        width: 200px;
        text-align: center;
    }
</style>
<html>
        <title>admin</title>
        <?php 
                echo "สวัสดีคุณ admin :";
                echo $_SESSION['username'];
        ?>
        <link href="detail.css" rel="stylesheet" type="text/css">
        <link href="top-header.css" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <body>
        <div class="header">
            <img id="logo_top" draggable="false" src="home/img_home.jpg">
            <div class="header-right">
                
                <a href="Profile.php">
                    &emsp;&emsp;&emsp;<img border = '0' src="home/user.png"  width="60" height="60" hspace=10 >
                </a>
                <a href="Logout.php">
                   <img border = '0' src="home/logout.png"  width="60" height="60">&emsp;&emsp;&emsp;
                </a>
            </div>
        </div>

            

        <br>
        <br>
        <br>
        <br>
        <div align=center>
        <div  class="system">
                <a href="addProduct.php"> เพิ่มสินค้า </a>
        </div>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <div  class="system">
                <a href="downProduct.php"> ลดสินค้า </a>
        </div>
        
        <br>
        <br>
        <br>
        <br>
        <br>
         <div class="system" >
            <a style="font-family: 'Itim', cursive;" href="CheckOrder.php" > ออเดอร์สินค้า </a>
        </div>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <div class="system">
            <a style="font-family: 'Itim', cursive;" href="#"> อื่นๆ </a>
        </div>
        </div>
        <br>
        <br>
        <br>
    </body>
</html>