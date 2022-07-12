<?php
session_start();
    //stugum enq ete sessiayum user" ka, pahum enq iran $user popoxakani mej,
        // ete chka uxarkum enq logini ej, haxordagrutyamb
    if(isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
    } else {
        $_SESSION['msg'] = 'Login please';
        header("location:http://task.loc/views/login.php");
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1> Welcome <?php echo $user['first_name'];//tpum enq login exac ogtvoxi anun" ?></h1>
    <div class=""d-flex justify-content-end"">
        <b><a href="http://task.loc/views/dashboard/clients/">Clients List</a></b>
    </div>
</body>
</html>
