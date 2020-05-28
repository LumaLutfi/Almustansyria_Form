<?php
include "db_conn.php";
if(isset($_POST['submit'])){
    //echo "<pre>", print_r($_FILES['files']['name']), "</pre>";
    $name = $_POST['fname'];
    $motherName = $_POST['motherName'];
    $birth = $_POST['birthday'];
    $gender = $_POST['gender'];
    $provence = $_POST['province'];
    $way = $_POST['way'];
    $alley = $_POST['alley'];
    $house = $_POST['house'];
    $stutas = $_POST['stutas'];



    $sql = "INSERT INTO employees 
    (fname,motherName,birthday,gender,province,way,alley,house, stutas) VALUES 
    ('$name','$motherName','$birth','$gender','$provence','$way','$alley', '$house', '$stutas')";
    if(mysqli_query($conn, $sql)){
    echo "data inserted to db";
    }else{
    echo "Error: ". $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
    }
    
?>