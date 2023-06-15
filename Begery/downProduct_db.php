<?php 
    session_start();
    include('server.php');
    
    $errors = array();

    $Bread = $_POST['bread'];
    $del = $_POST['quantity'];

    $TableNamebread="";
    $NBread=0;


    if($Bread=="While_Bread"){
        $sql="SELECT * from white_bread;";
        $result=mysqli_query($conn,$sql);
        $TableNamebread="white_bread";
    }else if($Bread=="Baguette"){
        $sql="SELECT Brno from baguette;";
        $result=mysqli_query($conn,$sql);
        $TableNamebread="baguette";
    }else if($Bread=="Holweet"){
        $sql="SELECT Brno from whole_wheat_bread;";
        $result=mysqli_query($conn,$sql);
        $TableNamebread="whole_wheat_bread";
    }else if($Bread=="Croissant"){
        $sql="SELECT Brno from croissant;";
        $result=mysqli_query($conn,$sql);
        $TableNamebread="croissant";
    }
    
    $NumBread="SELECT * FROM $TableNamebread";
    $NumBread = mysqli_query($conn,$NumBread);
    $aws=0;

    $Total = "SELECT Mnum FROM $TableNamebread";
    $Total = mysqli_query($conn,$Total);
    $TotalB=0;

    while($result=mysqli_fetch_row($Total)){
        $TotalB=$TotalB+$result[0];
    }

    if($del<$TotalB){
        while($re=mysqli_fetch_row($NumBread)){
            $aws=$re[1]-$del;
            if($re[1]<=$del){
                $sql = "UPDATE $TableNamebread SET Mnum='0' WHERE Brno='$re[0]'";
                mysqli_query($conn,$sql);
            }
            else {
                $sql = "UPDATE $TableNamebread SET Mnum='$aws' WHERE Brno='$re[0]'";
                mysqli_query($conn,$sql);
                break;
            }
            $del=-1*$aws;
        }
    }
    else {echo "<h1 style='color:red;'>Warning!!!!! <br>It so many!!</h1>";}

    echo "<a href='admin.php'> กลับหน้าหลัก </a>";

?>


   


