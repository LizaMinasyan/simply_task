<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . "/server/functions.php";
$client_id = $_GET['client_id'];
$conn = connect("simply_task");
$sql = "DELETE FROM `clients` WHERE `id` = $client_id";
$result = mysqli_query($conn, $sql);

    if($result) {
        $_SESSION['msg'] = [
                'status' => 'info',
                'text' => 'Row successfully deleted'
        ];
        header("location:http://task.loc/views/dashboard/clients/index.php");
    }
