<?php
    session_start();
    include('server.php');
    if(isset($_GET['edit'])){
        $track=$_GET['track'];
        $NowStatus=$_GET['NowStatus'];
        echo "<h1>".$track."</h1>";
        $sql="UPDATE track SET Status='$NowStatus' WHERE Tracknumber='$track';";
        mysqli_query($conn,$sql);
        header('location: CheckOrder.php');
    }else if(isset($_GET['del'])){
        $track=$_GET['track'];
        $sql="DELETE FROM bread WHERE Tracknumber='$track';";
        mysqli_query($conn,$sql);
        $sql="DELETE FROM track WHERE Tracknumber='$track';";
        mysqli_query($conn,$sql);
        header('location: CheckOrder.php');
    }
?>