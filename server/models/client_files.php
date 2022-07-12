<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/server/functions.php";
$conn = connect("simply_task");
$client_id= $_GET ["client_id"] ;
$sql = "SELECT * FROM `client_files` WHERE `client_id` = $client_id";

//echo $sql ; exit;
$result = mysqli_query($conn, $sql);

$files  = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($files);