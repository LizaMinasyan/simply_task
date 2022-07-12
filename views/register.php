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
                <h4>Register</h4>
                <form action="http://task.loc/server/models/register.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Անուն">
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last_name</label>
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Ազգանուն">
                    </div>
                    <div class="mb-3">
                        <label for="user Avatar" class="user Avatar">user Avatar</label>
                        <input type="file" class="form-control" name="user_avatar" id="user Avatar" placeholder="John">
                    </div>
                    <div class="mb-3">
                        <label for="Email" class="Email"> Email</label>
                        <input type="email" class="form-control" name="email" id="Email" placeholder="mail.ru">
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="Password"> Password</label>
                        <input type="Password" class="form-control" name="password" id="Password" placeholder="Password">
                    </div>



                    <button class="btn btn-success">Register</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>