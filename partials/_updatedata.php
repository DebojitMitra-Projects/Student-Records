<?php
$formMethod=$_SERVER['REQUEST_METHOD'];

if ($formMethod == 'POST') {
    $stu_id= $_POST['sid'];
    $stu_name=$_POST['sname'];
    $stu_address=$_POST['saddress'];
    $stu_class=$_POST['sclass'];
    $stu_phone=$_POST['sphone'];

    include '_dbconnect.php'; 

    $sql = "UPDATE `student` SET `sname` = '$stu_name', `saddress`='$stu_address', `sclass`='$stu_class', `sphone`='$stu_phone' WHERE `student`.`sid` = $stu_id";
    $result = mysqli_query($conn,$sql);
    header('location: https://localhost/crud/index.php');

    mysqli_close($conn);

}


?>