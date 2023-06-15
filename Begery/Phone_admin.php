<<?php
    if(isset($_GET['del'])){
        session_start();
        include('server.php');
        $UserID=$_SESSION['username'];
        $Phone=$_GET['del'];
        $sql="DELETE FROM phone WHERE Phone='$Phone';";
        mysqli_query($conn,$sql);
    }
    if(isset($_GET['phone'])){
        session_start();
        include('server.php');
        $UserID=$_SESSION['username'];
        $Phone=$_GET['phone'];
        $sql="INSERT INTO phone(UserID,Phone) VALUE('$UserID','$Phone');";
        mysqli_query($conn,$sql);
    }
    header('location: Profile_admin.php');
?>