<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/server/functions.php";

ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

$conn = connect("simply_task");

 $file_name = trim($_GET['inp_val']);
 $file_id = $_GET['file_id'];
 $old_name = trim($_GET['old_name']);

$file_dir = $_SERVER["DOCUMENT_ROOT"]."/server/assets/uploads/files/";
if (file_exists($file_dir.$old_name)){

    $ren = rename($file_dir.$old_name, $file_dir.$file_name);
    if($ren) {
        echo "success";
    } else {
        echo "fail";
    }
}
$sql = "UPDATE client_files SET file_name ='$file_name' WHERE id=$file_id";
//echo $sql; exit;
    $result = mysqli_query($conn, $sql);
