<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "/server/functions.php"; //
    $conn = connect("simply_task"); //kapa hastatum dbi het
    $first_name = php_input($_POST['first_name']);
    $last_name = php_input($_POST['last_name']);
    $avatar = "";
    if(!empty($_FILES['user_avatar']['name'])){
        $avatar = avatar_upload($_FILES['user_avatar']);
    }
    $sql_query = "INSERT INTO `clients` VALUES (null, '$first_name', '$last_name', '$avatar', 0, now())";
    $result = mysqli_query($conn, $sql_query); //sql harcuma tvyal toxi stexcelu  hamara

if ($result) {
    $_SESSION['msg'] = 'Client added'; //pahum enq haxordagrutyun
    header("location:http://task.loc/views/dashboard/clients/index.php"); // registaciaic heto mutqi ejna veradardznum
}









