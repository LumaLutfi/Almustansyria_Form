<?php
//connection

$conn = mysqli_connect("localhost", "root","", "AlMustanseriya_Staff");
$conn->set_charset("UTF8"); //insert arabic text into database
if (!$conn){
    die('Could not connect: ' . mysqli_error());
  }
  ?>