<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curl</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Curl Form</h1>
    <a  class="d-flex justify-content-end" href="http://task.loc/views/dashboard/clients/index.php">Back to Clients List</a>
</div>
<div class="container">
<form action="http://task.loc/server/models/2.php" method="post">

    <div>
        <label for="email" class="form-label">Email address</label>
        <input name="email" type="email" class="form-control" id="email_id" placeholder="name@example.com">
    </div>
    <div>
        <label for="phone" class="form-label">Tellephone</label>
        <input name="phone" type="tel" class="form-control" id="phone_id" placeholder="+374">
    </div>
    <div>
        <label for="textarea" class="form-label">Example textarea</label>
        <textarea name="text" class="form-control" id="textarea_id" rows="3"></textarea>
    </div>

    <div class="mt-3">
        <button class="btn btn-success">Send</button>
    </div>
</form>

    <?php
    session_start();
    if(isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
    }
    ?>
</div>


</body>
</html>