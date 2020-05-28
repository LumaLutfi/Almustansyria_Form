<?php
session_start(); //function to start the session
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css"/>
    <script src="main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../JavaScript/jQuery.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body dir="rtl">
    <ul align="right">
        <a href="../form.php">تسجيل مستخدم جديد</a>
</ul>
    <div class="container">
    <form method="post" action="login.php">
        <div id="name_div">
            <lable><br>الاسم الرباعي واللقب</br></lable>
            <input type="text" name="fname" id="name">
        </div>
        <div>
        <lable><br>تاريخ التولد</br></lable>
        <input type="text" id="datepicker1" placeholder="DD/MM/YYYY" class="datpicker" name="birthday">
        </div>
        <div>
        <input type="submit" value="دخول المستخدم" name="submit" class="submit">
</div>
    </form>
</div>
</body>
</html>
<?php
include 'db_conn.php';
if (!$conn){
    die("Connection faild: ".mysqli_connect_error());
}
if (isset($_POST['submit']))
{
    $name=$_POST['fname'];
    $birthday=$_POST['birthday'];
    $sql = "SELECT * FROM employees WHERE fname = '$name' AND birthday='$birthday'";
    $query=mysqli_query($conn, $sql) or die("Bad Query:$sql"); // query to select all data from the table
    $row=mysqli_fetch_row($query);
    $resultcheck = mysqli_num_rows($query);
    $_SESSION['id'] = $row[0];
    $_SESSION['fname'] = $row[1];
    $_SESSION['motherName'] = $row[2];
    $_SESSION['birthday'] = $row[3];
    $_SESSION['gender'] = $row[4];
    $_SESSION['province'] = $row[5];
    $_SESSION['way'] = $row[6];
    $_SESSION['alley'] = $row[7];
    $_SESSION['house'] = $row[8];
    $_SESSION['stutas'] = $row[9];
    

    if($resultcheck > 0){
 
        $_SESSION['f_name'] = $name;
     
        echo "<script>window.open('init.php','_self')</script>";
     
        }else{
          echo "<script>alert('Incorrect username or password.')</script>";
        }
      }

?>
