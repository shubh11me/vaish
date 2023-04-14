<?php

include('../conn.php');
$naav=$_POST['fname'];
$aadnaav=$_POST['lname'];
$eeee=$_POST['ema'];
$pppp=$_POST['pa'];


if(isset($_POST['user_id'])){

    $user_id=$_POST['user_id'];
$qu="update usersssss set useri_fname='$naav',useri_lname='$aadnaav',useri_email='$eeee',useri_password='$pppp'
 where useri_id='$user_id'";

}else{
    $qu="INSERT INTO `usersssss`(`useri_fname`, `useri_lname`, `useri_email`, `useri_password`) VALUES ('$naav','$aadnaav','$eeee','$pppp')
    ";

}
// echo $qu;
// die();

$result=mysqli_query($c,$qu);
if ($result) {
    echo "Sucesss";
}else{
    echo "false";
}
if(isset($_POST['user_id'])){
header("Location: ../user_list.php");
}else{
    header("Location: ../index.php");

}