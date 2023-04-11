<?php

include('../conn.php');

$tea_naav=$_POST['fullname'];
$tea_ema=$_POST['tea_email'];
$tea_pa=$_POST['tea_pass'];

$query= "INSERT INTO `teacher`(`teacher_name`,`teacher_email`,`teacher_password`) VALUES ('$tea_naav','$tea_ema','$tea_pa')";

$re=mysqli_query($c,$query);
if ($re) {
    echo "Sucesss";
}else{
    echo "false";
}

header("Location: ../teacher.php");

?>