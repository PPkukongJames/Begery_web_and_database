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
    
    echo "<h2>white_bread -> MAX : ".$NW."</h2>";
    echo "<h2>whole_wheat_bread -> MAX : ".$NH."</h2>";
    echo "<h2>croissant -> MAX : ".$NC."</h2>";
    echo "<h2>Baguette -> MAX : ".$NB."</h2>";
    
?>

<html>
    <body>
        <h1>ลดสินค้า</h1>
        <form action="downProduct_db.php" method="post">
        <label for="Bread">Bread:</label>
                <select name="bread">
                <option value="While_Bread">While Bread</option>
                <option value="Baguette">Baguette</option>
                <option value="Holweet">Holweet</option>
                <option value="Croissant">Croissant</option>
            </select>
            <br>
            <br>
            <label for="quantity">จำนวน :</label>
            <input type="number" id="quantity" name="quantity" min="1" max="100"><br><br>&emsp;&emsp;
            <button type="submit" name="down" >ตกลง</button>
        </form>
        <a style="font-size:30px;" href="admin.php">กลับหน้า admin</a>
    </body>
</html>