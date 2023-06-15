<?php 
    session_start();
    include('server.php'); 
?>
<!DOCTYPE html>

<html>
     <title>Register</title>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <body>
        <div align="center">
        <P><img src="img/Register_title.jpg" ALIGN="MIDDLE" alt="Logo"  height="175" width="1900"></P><br><br>
        </div>
        <pre><div align="center"><h1>   Register</h1></pre>

        <form align="center" action="register_db.php" method="post">
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

            <pre>
            <div class="input-group">
                 <label for="email">Email</label>  <input type="email" name="email" required></div>
            <div class="input-group">
           <label for="username">Username</label>  <input type="text" name="username" required></div>
            <div class="input-group">
            <label for="password_1">Password</label>  <input type="password" name="password_1" required></div>
            <div class="input-group">
<label for="password_2">Confirm Password</label>  <input type="password" name="password_2" required></div>
            <div class="input-group">
          <label for="Firsename">Firstname</label>  <input type="text" name="Firsename" required></div>
            <div class="input-group">
            <label for="Surname">Surname</label>  <input type="text" name="Surname" required></div>
            <div class="input-group">
    <label for="Anum">House number</label>  <input type="text" name="Anum" required></textarea></div>
             <div class="input-group">
                <label for="Street">Street</label>  <input type="text" name="Street" required></textarea></div>
             <div class="input-group">
             <label for="District">District</label>  <input type="text" name="District" required></textarea></div>
             <div class="input-group">
            <label for="Province">Province</label>  <input type="text" name="Province" required></textarea></div>
             <div class="input-group">
             <label for="Zipcode">Zipcode</label>  <input type="text" name="Zipcode" required></textarea></div>

            </pre>
            <div class="input-group">
                <button type="submit" name="reg_user" class="btn">Register</button>
            </div>
        <p>Already a member? <a href="login.php">Sign In</a></p> 

        </form>

    </body>
</html>