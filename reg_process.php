<?php
include('dbconfig.php');

    $username = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
 

        $sql = "INSERT INTO `user` (`uname`, `uemail`, `upwd`, `mob`) 
                VALUES ('$username', '$email', '$password', '$mobile')";

        $result = mysqli_query($con, $sql);

        if ($result) {
            echo "<script>alert('User added successfully');</script>";
          echo "<script>window.open('login.php', '_self');</script>";
        } else {
            echo "<script>alert('Failed to add User');</script>";
            echo "<script>window.open('register.php', '_self');</script>";
        }
    

?>
