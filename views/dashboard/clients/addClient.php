<?php
session_start();
if(!isset($_SESSION['user'])) {
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
    <title>New client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="d-flex justify-content-end">
    <b><a href="http://task.loc/views/dashboard/clients/index.php">Go To Clients List</a></b>
</div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h4>New Client</h4>

            <form action="http://task.loc/server/models/new_client.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Անուն">
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last_name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Ազգանուն">
                </div>
                <div class="mb-3">
                    <label for="user_avatar" class="form-label">Client Avatar</label>
                    <input type="file" class="form-control" name="user_avatar" id="user_avatar" placeholder="John">
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
</body>
</html>