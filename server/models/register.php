<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "/server/functions.php"; //
    $conn = connect("simply_task"); //kapa hastatum dbi het
    $first_name = php_input($_POST['first_name']);
    $last_name = php_input( $_POST['last_name']);
    $email = php_input($_POST['email']);
    $password = hash_password(php_input($_POST['password']));
    $avatar = avatar_upload($_FILES['user_avatar']);

    $sql_query = "INSERT INTO `users` VALUES(null, '$first_name', '$last_name', '$avatar', '$email','$password', now())";
    $result = mysqli_query($conn, $sql_query); //sql harcuma tvyal toxi stexcelu  hamara

    if($result) {
        $_SESSION['msg'] = 'Account created'; //pahum enq haxordagrutyun
        header("location:http://task.loc/views/login.php"); // registaciaic heto mutqi ejna veradardznum
    }