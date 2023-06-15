<<?php
    if(isset($_GET['phone'])){
        session_start();
        include('server.php');
        $UserID=$_SESSION['username'];
        $Phone=$_GET['phone'];
        $sql="INSERT INTO phone(UserID,Phone) VALUE('$UserID','$Phone');";
        mysqli_query($conn,$sql);
    }
    header('location: Profile.php');
?>