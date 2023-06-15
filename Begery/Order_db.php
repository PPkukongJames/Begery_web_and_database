<?php
    session_start();
    include('server.php');
    echo "<br/>สวัสดีคุณ : ".$_SESSION['username']."<br/><br/>";
    if(isset($_COOKIE["cart"])){
            $cart=$_COOKIE["cart"];
        }
    $sum=$cart[0]+$cart[1]+$cart[2]+$cart[3];
    if(isset($_GET['OK']) && $sum!=0){
        $UserID=$_SESSION['username'];
        $sql = "SELECT Tracknumber FROM track;";
        $sql = mysqli_query($conn,$sql);
        $Mytrack="";
        $date1=date("Y-m-d");
        if(mysqli_num_rows($sql)==0){
            $insert="INSERT INTO track(Tracknumber,UserID,Date,Status,Brnum) VALUE('A1000','$UserID','$date1','waiting for payment',$sum);";
            $insert = mysqli_query($conn,$insert);
            $Mytrack="A1000";
        }
        else{
            $StartTrack=1000+mysqli_num_rows($sql)+2;
            $Mytrack="A".(string)$StartTrack;
            $insert="INSERT INTO track(Tracknumber,UserID,Date,Status,Brnum) VALUE('$Mytrack','$UserID','$date1','waiting for payment',$sum);";
            $insert = mysqli_query($conn,$insert);
        }
        echo "Hello Order";
        $start=10000;
        $sql = "SELECT Brno FROM bread WHERE Brno>='10000';";
        $sql = mysqli_query($conn,$sql);
        $start=$start+mysqli_num_rows($sql);
        

        if($cart[0]!=0){
            $insert="INSERT INTO bread(Brno,Brname,Price,Tracknumber) VALUE($start,'white_bread',80*$cart[0],'$Mytrack');";
            mysqli_query($conn,$insert);
            $start++;
        }
        if($cart[1]!=0){
            $insert="INSERT INTO bread(Brno,Brname,Price,Tracknumber) VALUE($start,'baguette',80*$cart[1],'$Mytrack');";
            mysqli_query($conn,$insert);
            $start++;
        }
        if($cart[2]!=0){
            $insert="INSERT INTO bread(Brno,Brname,Price,Tracknumber) VALUE($start,'whole_wheat_bread',80*$cart[2],'$Mytrack');";
            mysqli_query($conn,$insert);
            $start++;
        }
        if($cart[3]!=0){
            $insert="INSERT INTO bread(Brno,Brname,Price,Tracknumber) VALUE($start,'croissant',80*$cart[3],'$Mytrack');";
            mysqli_query($conn,$insert);
            $start++;
        }
        for($i=0;$i<4;$i++){
            setcookie("cart[$i]",0);
        }
    }
    header('location: MyOrder.php');
?>