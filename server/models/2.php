<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . "/server/functions.php";//inputneri gradaran

$curl = curl_init(); //ashxatanqi startna

$email = ($_POST['email']);
$phone = ($_POST['phone']);
$text = ($_POST['text']);

$data_curl = "{ \"email\":\"$email\", \"phone\":\"$phone\", \"text\":\"$text\"}"; //jsoni haytararumna
curl_setopt_array($curl, array(
    CURLOPT_URL => "http://task.loc/server/models/curl.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $data_curl,
    CURLOPT_HTTPHEADER => array(
        "content-type: application/json"
    ),
));
$response = curl_exec($curl);

$err = curl_error($curl);

curl_close($curl);
$_SESSION['msg'] = $response;
header("location:http://task.loc/views/dashboard/clients/curlForm.php");

?>