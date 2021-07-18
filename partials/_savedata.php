<?php
$formMethod=$_SERVER['REQUEST_METHOD'];

if ($formMethod == 'POST') {
    $stu_name=$_POST['sname'];
    $stu_address=$_POST['saddress'];
    $stu_class=$_POST['class'];
    $stu_phone=$_POST['sphone'];

    include '_dbconnect.php'; 

    $sql = "INSERT INTO `student` (`sname`,`saddress`,`sclass`,`sphone`) VALUES ('$stu_name','$stu_address','$stu_class','$stu_phone')";
    $result = mysqli_query($conn,$sql);
    header('location: https://localhost/crud/index.php');

    mysqli_close($conn);

}


?>