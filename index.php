<?php
    session_start();
    include "../backend/connection.php";

    $adminId = $_POST['adminId'];
    $password = $_POST['password'];

    $errorMsg = "Invalid username or password";

    $sql = "SELECT * FROM admin_details WHERE adminId = '$adminId' AND password = '$password'";
    $result = $con->query($sql);

    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        if($row['adminId'] === $adminId && $row['password'] === $password){
            $_SESSION['adminId'] = $row['adminId'];
            // $_SESSION['password'] = $row['password'];
            header("location: view_student.php");
            exit();
        }
    }else {
        echo "<script>alert('$errorMsg')</script>";
        echo '<script>window.location.href = "Home.html";</script>';
    }
    
    $con->close();