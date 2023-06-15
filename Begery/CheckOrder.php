<?php 
    session_start();
    include('server.php');
    echo "<br/>สวัสดีคุณ : ".$_SESSION['username']."<br/><br/>";
    $UserID=$_SESSION['username'];
    $ThisTrack="SELECT * FROM track INNER JOIN userr ON track.UserID=userr.UserID;";
    $ThisTrack=mysqli_query($conn,$ThisTrack);

?>
<style>
    table, th, td {
        border:1px solid black;
    }
</style>
<!DOCTYPE html>
<html>
    <title>Check_Order</title>
    <body>
        <?php 
            while($data=mysqli_fetch_row($ThisTrack)){
                $Thisbread="SELECT Brname,Price FROM bread WHERE Tracknumber='$data[0]';";
                $Thisbread=mysqli_query($conn,$Thisbread);
        ?>
                <table style="width:100%">
                    <tr>
                        <th>Track</th>
                        <th>UserID</th>
                        <th>Firstname</th>
                        <th>Surname</th>
                        <th>Bread</th>
                        <th>Num</th>
                        <th>Status</th>
                    </tr>
                <?php while($bread=mysqli_fetch_row($Thisbread)){
                    echo '<tr>';
                    echo '<td>'.$data[0].'</td>';
                    echo '<td>'.$data[1].'</td>';
                    echo '<td>'.$data[8].'</td>';
                    echo '<td>'.$data[9].'</td>';
                    echo '<td>'.$bread[0].'</td>';
                    echo '<td>'.$bread[1]/80 .'</td>';
                    echo '<td>'.$data[3].'</td>';
                    echo '</tr>';
                }?>
                </table>
                <br clear=left>
            <form  action="CheckOrder_db.php" method="get">
                <input type="text" name="NowStatus">
                <input type="hidden" name="track" value="<?php echo $data[0]; ?>">
                <button type="submit" name="edit" value="edit">Status Update</button></form>
            </form>
            <form  action="CheckOrder_db.php" method="get">
                <input type="hidden" name="track" value="<?php echo $data[0]; ?>">
                <button type="submit" name="del" value="del">ลบ</button></form>
            </form>
        <hr>
        <?php }
        echo '<hr>'; ?>
        <br>
    </body>
</html>
<html><body><a href="admin.php">กลับหน้า admin</a></body></html>