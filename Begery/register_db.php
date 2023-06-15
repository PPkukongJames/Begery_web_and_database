<?php 
    session_start();
    include('server.php');

    $errors = array();
    if(isset($_POST['reg_user'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $UserID = mysqli_real_escape_string($conn, $_POST['username']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
        $Firstname = mysqli_real_escape_string($conn, $_POST['Firsename']);
        $Surname = mysqli_real_escape_string($conn, $_POST['Surname']);
        $Anum = mysqli_real_escape_string($conn, $_POST['Anum']);
        $Street = mysqli_real_escape_string($conn, $_POST['Street']);
        $District = mysqli_real_escape_string($conn, $_POST['District']);
        $Province = mysqli_real_escape_string($conn, $_POST['Province']);
        $Zipcode = mysqli_real_escape_string($conn, $_POST['Zipcode']);

        if ($password_1 != $password_2){
            array_push($errors, "The two passwords do not match");
        }

        $user_check_query = "SELECT * FROM userr WHERE UserID = '$UserID' OR Email = '$email' ";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if($result){ // if user exists
            if ($result['UserID'] === $UserID){
                    array_push($errors, "Username already exists");
            }
            if ($result['Email'] === $email){
                array_push($errors, "Email already exists");
            }

        }

        if (count($errors)==0){
            $password = md5($password_1);

            $sql = "INSERT INTO userr (UserID,Password,Email,Fname,Sname,Anum,Street,District,Province,Zipcode) VALUES ('$UserID', '$password', '$email','$Firstname','$Surname','$Anum','$Street','$District','$Province','$Zipcode')";
            mysqli_query($conn,$sql);

            $_SESSION['username'] = $UserID;
            $_SESSION['success'] = "Register success";
            header('location: login.php');
        } else {
            array_push($errors, "Username or Email already exists");
            $_SESSION['error'] = "Username or Email already exists";
            header("location: register.php");
        }

    }
    else{
        echo "Can't connect register!";
    }

?>