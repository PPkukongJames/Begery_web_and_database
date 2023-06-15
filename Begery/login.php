<?php 
    session_start();
    include('server.php'); 
?>

<!doctype html>
<style>
body{
    font-family: 'Itim', cursive;
    text-align: center;
    font-size: 26px;
}

</style>
<html>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <title>Brainfree_Begery</title>
    <body>
    <form action="login_db.php" method="post" name="login">

<!-- notification message-->
<?php if (isset($_SESSION['error'])) : ?>
           <div class="error">
               <h3>
                   <?php 
                       echo $_SESSION['error'];
                       unset($_SESSION['error']);
                   ?>
               </h3>
           </div>
<?php endif ?>
        <div align="center">
        <P><img src="img/Register_title.jpg" ALIGN="MIDDLE" alt="Logo"  height="175" width="1900"></P><br><br>
        </div>
        </div>
        <hr>
        <h1 style="font-size: 50px;font-family: 'Itim', cursive;text-align: center;">ลงชื่อเข้าใช้งาน</h1>
        
        <br>
            ชื่อผู้ใช้งาน : <input type="text" name="username" required autofocus><br><br>
            รหัสผ่าน   &emsp;: <input type="password" name="password" /><br><br>
            <button style="font-size: 26px;font-family: 'Itim', cursive;" type="submit" name="login_user" class="btn">ลงชื่อเข้าใช้งาน</button><br><br>
            <a href="register.php">สมัครใช้งาน</a>
        </form>



    </body>
</html>