<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/server/functions.php"; // chanapara

$conn = connect("simply_task"); //mianalu kodna kapa hastatum dbi het
$email = php_input($_POST['email']);
$password = hash_password(php_input($_POST['password']));

$sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password`= '$password'";// sql hramana sarqum, dnuma
// $sql popoxakani mej, heto $conn db-i vra ashxatacnum et hramany heto hramany users table-ic yntruma
// sax toxery vortex email-y havasara $email popoxakani arjeqin, password-y $password
//isk resulty et toxerna  $email= email aysinqn vory vor yntrec dnuma result popoxakani mej


$result = mysqli_query($conn,$sql);

//paymana vor petqa stugenq ete unenq gone mek gtnvac tvyal pahenq popoxakani mej asoceativ zangvaci tesqov
if(mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);//login exac user
    $_SESSION['user'] = [
        'first_name' => $user['first_name'],
        'last_name' => $user['first_name'],
        'avatar' => $user['first_name'],
        'email' => $user['first_name'],
        'created_at' => $user['first_name']
    ];
    header("location:http://task.loc/views/dashboard/home.php");
} else {
    $_SESSION['msg'] = 'Incorrect login or password';
    header("location:http://task.loc/views/login.php");
}
