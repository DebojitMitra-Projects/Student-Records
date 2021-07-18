<?php 
    $stu_id = $_GET['id'];
        include 'partials/_dbconnect.php';
        $sql="DELETE FROM `student` WHERE `student`.`sid` = $stu_id";
        $result = mysqli_query($conn,$sql) or die("Query unsuccessfull");
        header('location: https://localhost/crud/index.php');

        mysqli_close($conn);
?>