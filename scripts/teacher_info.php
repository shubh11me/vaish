<?php

include('../conn.php');

$tea_naav=$_POST['fullname'];
$tea_ema=$_POST['tea_email'];
$tea_pa=$_POST['tea_pass'];



if(isset($_POST['teacher_id'])){
    $tea_id=$_POST['teacher_id'];
$qu="update teacher set teacher_name='$tea_naav',teacher_email='$tea_ema',teacher_password='$tea_pa'
 where teacher_id='$tea_id'";
}else{
    $qu= "INSERT INTO `teacher`(`teacher_name`,`teacher_email`,`teacher_password`) VALUES ('$tea_naav','$tea_ema','$tea_pa')";
}



$re=mysqli_query($c,$qu);
if ($re) {
    echo "Sucesss";
}else{
    echo "false";
}
if(isset($_POST['teacher_id'])){
    header("Location: ../teacher_list.php");
    }else{
        header("Location: ../teacher.php");
    
    }


?>