<?php

require $_SERVER['DOCUMENT_ROOT'] . "/server/functions.php";
$conn = connect("simply_task");

function curl_fnc($data){
    global $conn;
    $email = $data['email'];
    $phone = $data['phone'];
    $text = $data['text'];
    $sql = "INSERT INTO curl_form VALUES (null, '$email', '$phone', '$text',   now())";
    $result = mysqli_query($conn, $sql);
    if($result) {
        return "Row successfully created";
        }
    }

$data = json_decode(file_get_contents('php://input'), true);

    echo curl_fnc([
    'email' => $data['email'],
    'phone' => $data['phone'],
    'text' => $data['text'],
    ]);


?>