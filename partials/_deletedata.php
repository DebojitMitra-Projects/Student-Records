<?php
$formMethod=$_SERVER['REQUEST_METHOD'];

if ($formMethod == 'POST') {
    $stu_id= $_POST['sid'];
 

    include '_dbconnect.php'; 

    $sql = "DELETE FROM `student` WHERE `student`.`sid` = $stu_id";
    $result = mysqli_query($conn,$sql);
    header('location: https://localhost/crud/index.php');

    mysqli_close($conn);

}