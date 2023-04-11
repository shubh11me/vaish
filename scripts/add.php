<?php

include('../conn.php');
$naav=$_POST['fname'];
$aadnaav=$_POST['lname'];
$eeee=$_POST['ema'];
$pppp=$_POST['pa'];

$qu="INSERT INTO `usersssss`(`useri_fname`, `useri_lname`, `useri_email`, `useri_password`) VALUES ('$naav','$aadnaav','$eeee','$pppp')
";

$result=mysqli_query($c,$qu);
if ($result) {
    echo "Sucesss";
}else{
    echo "false";
}

header("Location: ../index.php");




?>