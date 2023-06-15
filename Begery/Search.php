<?php
    $search=$_GET['search'];
    if($search=="White bread"){
        header('location: White_Bread.php'); 
    }else if($search=="Holweet"){
        header('location: Holweet.php');
    }else if($search=="Croissant"){
        header('location: croissant.php');
    }else if($search=="Baguette"){
        header('location: Baguette.php');
    }else{
        header('location: first.php');
    }
?>