<?php
session_start();
ob_start();

include '../backend/db.php';

if(isset($_POST['contact'])){
    $name = $_POST['fname'] .' '. $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $reason = $_POST['reason'];

    mysqli_query($conn, "INSERT INTO `contact`(`Name`, `Email`, `Phone`, `Reason`) 
    VALUES('$name', '$email', '$phone', '$reason')");
    
    // success
    $_SESSION['contact-success'] = true;
    header('Location:success.php');
}else{
    header('Location:../');
}
?>