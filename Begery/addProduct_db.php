<?php 
    session_start();
    include('server.php');
    
    $errors = array();

    $Bread = $_POST['bread'];
    $num = $_POST['num'];
    $PD =$_POST['PD'];
    $EXP =$_POST['EXP'];

    $TableNamebread="";
    $NBread=0;
    if($Bread=="While_Bread"){
        $sql="SELECT Brno from white_bread;";
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
    while($test=mysqli_fetch_row($result)){
        $NBread=$test[0]+1;
    }

    $UserID=$_SESSION['username'];
    $baker = "SELECT Bno FROM Baker WHERE UserID='$UserID'";
    $baker = mysqli_query($conn,$baker);
    if(mysqli_num_rows($baker)==1){
        $Bno = mysqli_fetch_row($baker)[0];
    
        $insert="INSERT INTO bread(Brno,Brname,Price) VALUE($NBread,'$TableNamebread',80);";
        mysqli_query($conn,$insert);

        $insert="INSERT INTO $TableNamebread(Brno,Mnum) VALUE($NBread,$num);";
        mysqli_query($conn,$insert);

        $insert="INSERT INTO Maker(Brno,Bno) VALUE($NBread,$Bno);";
        mysqli_query($conn,$insert);

        $insert="INSERT INTO Make_detail(Brno,MFG,EXP) VALUE($NBread,'$PD','$EXP');";
        mysqli_query($conn,$insert);
        header('location: admin.php');
    }
    else{
        echo "insert error";
    }
   
?>