<?php
    session_start();
    include('server.php');
    $Bread=$_GET['Bread'];
    $MyBread=-1;
    if($Bread==='white_bread'){
        $MyBread=0;
    }
    else if($Bread==='baguette'){
        $MyBread=1;
    }
    else if($Bread==='whole_wheat_bread'){
        $MyBread=2;
    }
    else if($Bread==='croissant'){
        $MyBread=3;
    }

    if(!isset($_COOKIE['cart'])){
        setcookie("cart[0]",0);
        setcookie("cart[1]",0);
        setcookie("cart[2]",0);
        setcookie("cart[3]",0);
    }


    $cart=$_COOKIE['cart'];
    $cart[$MyBread]=$cart[$MyBread]+$_GET['NBread'];
    if(isset($_GET['del'])){
        $cart[$MyBread]=0;
    }
    $sql = "SELECT Mnum FROM $Bread";
    $sql = mysqli_query($conn,$sql);
    $BT=0;
    while($result=mysqli_fetch_row($sql)){
        $BT=$BT+$result[0];
    }
    if($cart[$MyBread]>$BT){
        header('location: MyCart.php');
    }else{
    setcookie("cart[$MyBread]",$cart[$MyBread]);
    header('location: MyCart.php');
    }
?>