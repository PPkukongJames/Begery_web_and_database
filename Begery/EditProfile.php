<?php 
    session_start();
    include('server.php');
    $UserID=$_SESSION['username'];
    $Address="SELECT Fname,Sname,Anum,Street,District,Province,Zipcode FROM userr WHERE UserID='$UserID'";
    $Address=mysqli_query($conn,$Address);
    $MyAddress=mysqli_fetch_row($Address);
    $sql="SELECT Phone FROM phone WHERE UserID='$UserID'";
    $Phone=mysqli_query($conn,$sql);
?>
<html>
    <title>My profile: edit</title>
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
                <div class="searchbox">
                    <form action="Search.php" method="get"> 
                        <input type="text" placeholder=" Search...." name="search"> 
                        <button type="submit" >Submit</button> 
                    </form>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><img border = '0' src="home/user.png"  width="60" height="60" hspace=10 ></button>
                    <div class="dropdown-content">
                        <a href="Profile.php">
                            <span class="user-home"><img border = '0' src="home/user_2.png" width="30" height="30">&emsp; บัญชีของฉัน</span>
                        </a>
                        <a href="MyOrder.php">
                            <span class="user-home"><img border = '0' src="home/box.png"  width="30" height="30">&emsp; คำสั่งซื้อสินค้า</span>    
                        </a>
                        <a href="money.php">
                            <span class="user-home"><img border = '0' src="home/money.png"  width="30" height="30">&emsp; แจ้งการชำระเงิน</span>    
                        </a>
                        <a href="Logout.php">
                            <span class="user-home"><img border = '0' src="home/logout.png"  width="30" height="30">&emsp; ออกจากระบบ</span>    
                        </a>
                    </div>
                </div>
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
        <!--end header-->
        <br>
        <div class="profile-form">
            <div class="content">
                <h1>ข้อมูลส่วนตัว</h1>
                <!-------------->
                <?php
                    if(!isset($_GET['Fname'])){?>
                        <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="input-group">
                            <label for="Firsename">Firstname &emsp;</label> 
                            <input type="text" name="Firstname" value=<?php echo $MyAddress[0]; ?> required>
                            <input type="submit" name="Fname" value="ยืนยันการแก้ไข"></div>
                        </form>
                    <?php }else{
                        $Firstname = $_GET['Firstname'];
                        $sql="UPDATE userr SET Fname='$Firstname' WHERE UserID='$UserID';";
                        mysqli_query($conn,$sql);
                    header("location: EditProfile.php");
                }?>
                <?php
                    if(!isset($_GET['Sname'])){?>
                        <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="input-group">
                            <label for="Surname">Surname &nbsp&nbsp&emsp;</label>  
                            <input type="text" name="Surname" value=<?php echo $MyAddress[1]; ?> required>
                            <input type="submit" name="Sname" value="ยืนยันการแก้ไข"></div>
                        </form>
                    <?php }else{
                        $Surname = $_GET['Surname'];
                        $sql="UPDATE userr SET Sname='$Surname' WHERE UserID='$UserID';";
                        mysqli_query($conn,$sql);
                        header("location: EditProfile.php");
                }?>
                <?php
                    if(!isset($_GET['An'])){?>
                        <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="input-group">
                            <label for="Anum">Address <br> บ้านเลขที่ &nbsp&nbsp&emsp;</label>
                            <input type="text" name="Anum" value=<?php echo $MyAddress[2]; ?> required></textarea>
                            <input type="submit" name="An" value="ยืนยันการแก้ไข"></div>
                        </form>
                    <?php }else{
                        $Anum = $_GET['Anum'];
                        $sql="UPDATE userr SET Anum='$Anum' WHERE UserID='$UserID';";
                        mysqli_query($conn,$sql);
                        header("location: EditProfile.php");
                }?>

                <?php
                    if(!isset($_GET['St'])){?>
                        <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="input-group">
                            <label for="Street">ถนน &nbsp&nbsp&emsp;&emsp;&emsp;</label>  
                            <input type="text" name="Street" value=<?php echo $MyAddress[3]; ?> required></textarea>
                            <input type="submit" name="St" value="ยืนยันการแก้ไข"></div>
                        </form>
                    <?php }else{
                        $Street = $_GET['Street'];
                        $sql="UPDATE userr SET Street='$Street' WHERE UserID='$UserID';";
                        mysqli_query($conn,$sql);
                        header("location: EditProfile.php");
                    }?>

                <?php
                    if(!isset($_GET['Dis'])){?>
                        <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="input-group">
                            <label for="District">อำเภอ/เขต &nbsp&nbsp&nbsp&nbsp</label>  
                            <input type="text" name="District" value=<?php echo $MyAddress[4]; ?> required></textarea>
                            <input type="submit" name="Dis" value="ยืนยันการแก้ไข"></div>
                        </form>
                    <?php }else{
                        $District = $_GET['District'];
                        $sql="UPDATE userr SET District='$District' WHERE UserID='$UserID';";
                        mysqli_query($conn,$sql);
                        header("location: EditProfile.php");
                }?>

                <?php
                    if(!isset($_GET['Pro'])){?>
                        <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="input-group">
                            <label for="Province">จังหวัด &nbsp&nbsp&nbsp&emsp;&emsp;</label>  
                            <input type="text" name="Province" value=<?php echo $MyAddress[5]; ?> required></textarea>
                            <input type="submit" name="Pro" value="ยืนยันการแก้ไข"></div>
                        </form>
                    <?php }else{
                        $Province = $_GET['Province'];
                        $sql="UPDATE userr SET Province='$Province' WHERE UserID='$UserID';";
                        mysqli_query($conn,$sql);
                        header("location: EditProfile.php");
                    }?>

                    <?php
                        if(!isset($_GET['Zip'])){?>
                            <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <div class="input-group">
                                <label for="Zipcode">รหัสไปรษณีย์ &nbsp</label>
                                <input type="text" name="Zipcode" value=<?php echo $MyAddress[6]; ?> required></textarea>
                                <input type="submit" name="Zip" value="ยืนยันการแก้ไข"></div>
                            </form>
                        <?php }else{
                            $Zipcode = $_GET['Zipcode'];
                            $sql="UPDATE userr SET Zipcode='$Zipcode' WHERE UserID='$UserID';";
                            mysqli_query($conn,$sql);
                            header("location: EditProfile.php");
                    }?>
                <!--end-->
                <div align='center'>
                <br>
                <button onclick="window.location.href='/begery/Profile.php'">แก้ไขเรียบร้อย</button>
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
                <form style="display: inline-block;" action="Phone.php" method="get"> 
                    <input id="textbox" type="tel" name="del" placeholder=" เบอร์โทรศัพท์ที่ต้องการลบ..."> 
                    <button type="submit" >ลบเบอร์โทรศัพท์</button> 
                </form>
            </div>
            <br><br><br><br><br><br>
            <div class="searchbox">
                <form style="display: inline-block;" action="Phone.php" method="get"> 
                    <input id="textbox" type="tel" name="phone" placeholder=" เบอร์โทรศัพท์ที่ต้องการเพิ่ม..."> 
                    <button type="submit" >เพิ่มเบอร์โทรศัพท์</button> 
                </form>
            </div>
        </div>
        </div>
    </body>
</html>



    
 