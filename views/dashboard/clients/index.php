<?php
session_start();
if(!isset($_SESSION['user'])) {
    $_SESSION['msg'] = 'Login please';
    header("location:http://task.loc/views/login.php");
}

require $_SERVER['DOCUMENT_ROOT'] . "/server/functions.php";

$conn = connect("simply_task");
$sql = "SELECT * FROM `clients`";
$result = mysqli_query($conn, $sql);
$clients  = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clients</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <a class="btn btn-primary mt-3" href="http://task.loc/views/dashboard/clients/addClient.php">Create New Client</a> <br>
        <a class="btn btn-primary mt-3" href="http://task.loc/views/dashboard/clients/curlForm.php">Curl</a>
        <h2>CLIENTS LIST</h2>
        <div class="d-flex justify-content-end">
            <b><a href="http://task.loc/views/dashboard/home.php">Go To Home</a></b>

        </div>

         <table class="table">
                    <thead>
                    <tr>

                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Avatar</th>
                <th scope="col">File Exists</th>
                <th scope="col">Date</th>
                <th scope="col">Options</th>

            </tr>
             </thead>
             <tbody>
                <?php for($i = 0; $i < count($clients); $i++) { ?>
                    <tr>
                        <td> <?php echo $i + 1 ; ?> </td>
                        <td>
                            <a href="http://task.loc/views/dashboard/clients/clientDetails.php?client_id=<?php echo $clients[$i]['id'];?>"><?php echo $clients[$i]['first_name']; ?></a>
                        </td>
                        <td> <?php echo $clients[$i]['last_name']; ?> </td>
                        <td >
                            <img style="width: 50px; height:50px; border-radius: 50%" src="http://task.loc/server/assets/uploads/avatars/<?php echo ($clients[$i]['avatar'] != NULL) ? $clients[$i]['avatar'] : 'person-circle.svg' ?>" alt="">
                        </td>
                        <td>
                            <?php
                                if($clients[$i]['file_isset']) {
                                    echo "<span class='text-success'>Yes</span>";
                                } else {

                                    echo "<span class='text-danger'>No</span>";

                                }
                            ?>
                        </td>
                        <td><?php echo date("m/d/Y H:i a", strtotime($clients[$i]['created_at'])); ?></td>
                        <td>
                            <a class="btn btn-primary" href="http://task.loc/views/dashboard/clients/checkFile.php?client_id=<?php echo $clients[$i]['id'];?>">Check File</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>