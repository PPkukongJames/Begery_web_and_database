<?php 
    session_start();
    include('server.php');
    echo "<br/>สวัสดีคุณ : ".$_SESSION['username']."<br/><br/>";
?>
<html>
    <body>
        
        <form action="addProduct_db.php" method="post">
        <label for="Bread">Bread:</label>
                <select name="bread">
                <option value="While_Bread">While Bread</option>
                <option value="Baguette">Baguette</option>
                <option value="Holweet">Holweet</option>
                <option value="Croissant">Croissant</option>
            </select>
            <br><br>
            <label for="num">จำนวน :</label>
            <input type="number" id="num" name="num" min="1" max="10"><br><br>
            <div><label for="date">วันผลิต</label>  <input type="date" name="PD" required></div><br>
            <div><label for="date">วันหมดอายุ</label>  <input type="date" name="EXP" required></div><br>
            <input type="submit" name="add">
        </form>
        <a style="font-size:30px;" href="admin.php">กลับหน้า admin</a>
    </body>
</html>