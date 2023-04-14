<?php
include('../conn.php');
include('../header.inc.php');

$tea_id = null;
if (isset($_GET['tea'])) {
    $tea_id = $_GET['tea'];
    $q = "DELETE FROM `teacher` WHERE `teacher`.`teacher_id`='$tea_id'";
    echo $q;
    $r = mysqli_query($c, $q);
    if ($r) {
        header("Location: ../teacher_list.php");
    } else {
        echo "NOo run";
        die();
    }
} else {
    header("Location: ../teacher_list.php");
}


?>