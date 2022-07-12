<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/server/functions.php"; //
$conn = connect("simply_task"); //kapa hastatum dbi het
$client_id = php_input($_POST['client_id']);
$file = file_upload($_FILES['user_file']);

//print_r_pre([
//    'file' => $file,
//    'client_id' => $client_id
//]);

$sql_query = "INSERT INTO `client_files` VALUES (null, '$file', '$client_id', now())";
mysqli_query($conn, "UPDATE `clients` SET `file_isset` = 1 WHERE `id` = $client_id");
$result = mysqli_query($conn, $sql_query); //sql harcuma tvyal toxi stexcelu  hamara



if ($result) {
    $_SESSION['msg'] = 'Client added'; //pahum enq haxordagrutyun
    header("location:http://task.loc/views/dashboard/clients/index.php"); // registaciaic heto mutqi ejna veradardznum
}