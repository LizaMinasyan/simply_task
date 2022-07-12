<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . "/server/functions.php";
$file_id = $_GET['file_id'];
$conn = connect("simply_task");
// echo $file_name = $_GET['file_name'];
 $sqlSelectName = "SELECT * FROM `client_files` WHERE `id`= '$file_id'";
 $GetFileName = mysqli_query($conn, $sqlSelectName);
 $GetFileNameResult = mysqli_fetch_array($GetFileName);


$sql = "DELETE FROM `client_files` WHERE `id` = '$file_id'";
$result = mysqli_query($conn, $sql);

if($result) {
    $_SESSION['msg'] = [
        'status' => 'info',
        'text' => 'Row successfully deleted'
    ];
    unlink("../assets/uploads/files/".$GetFileNameResult['file_name']);

    //header("location:http://task.loc/views/dashboard/clients/index.php");
} delete_file($_GET["id"], $_GET['id_client']);
