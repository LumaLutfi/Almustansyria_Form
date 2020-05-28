<?php include 'imageUpload.php';

$sql="SELECT * FROM profile_image";
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <!-- Bootstrap 4--->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="css/style.css">
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-md-4 form-div">
                <table class="table table-bordered">
                    <thead>
                        <th>User Name</th>
                        <th>Profile Image</th>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                        <tr>
                            <td>
                                <?php echo $user['fname'];?>
                            </td>
                            <td>
                              <img src="../images/<?php echo $user['picture'];?>" width="100px; height:100px;"/>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

</div>
</body>
</html>

