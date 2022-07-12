<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/server/functions.php"; //
$conn = connect("simply_task"); //kapa hastatum dbi het
$client_id = $_POST['client_id'];
$first_name = php_input($_POST['first_name']);
$last_name = php_input($_POST['last_name']);
if(isset($_FILES['user_avatar']) && $_FILES['user_avatar']['name'] != "") {
    $avatar = avatar_upload($_FILES['user_avatar']);
} else {
    $result = mysqli_query($conn, "SELECT avatar FROM clients WHERE `id` = $client_id");
    $avatar = mysqli_fetch_assoc($result)['avatar'];//es nra hamar vor ete formayic avatar chga, bazayum popoxutyun chlini, es menak avatari hamar a, karox a mard@ chi uzum avatar poxi
}
$sql = "UPDATE clients SET last_name = '$last_name', first_name='$first_name', avatar='$avatar' WHERE id = '$client_id' ";
$result = mysqli_query($conn, $sql);
if($result) {
    $_SESSION['msg'] = [
        'status' => 'success',
        'text' => 'Row Successfully updated'
    ];
    header("location:http://task.loc/views/dashboard/clients/index.php");
}
