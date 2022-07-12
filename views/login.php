<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <a  class="container" href="http://task.loc/views/dashboard/clients/index.php">Back to Clients List</a>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
            <h4>Login</h4>
            <?php if(isset($_SESSION['msg'])) {  //ete session mesigy ka dnuma stex ete che che?>
                <p><?php echo $_SESSION['msg']; ?></p>
            <?php  } unset($_SESSION['msg']); ?>
            <form action="http://task.loc/server/models/login.php" method="post" >

                <div class="mb-3">
                    <label for="Email" class="Email"> Email</label>
                    <input type="email" class="form-control" name="email" id="Email" placeholder="John">
                </div>
                <div class="mb-3">
                    <label for="Password" class="Password"> Password</label>
                    <input type="Password" class="form-control" name="password" id="Password" placeholder="John">
                </div>

                <button class="btn btn-success">Login</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>