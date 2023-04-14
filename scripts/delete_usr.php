<?php
include('../conn.php');
include('../header.inc.php');

$user_id = null;
if (isset($_GET['usr'])) {
    $user_id = $_GET['usr'];
    $q = "DELETE FROM `usersssss` WHERE `usersssss`.`useri_id`='$user_id'";
    // echo $q;
    $r = mysqli_query($c, $q);
    if ($r) {
        header("Location: ../user_list.php");
    } else {
        echo "NOo run";
        die();
    }
} else {
    header("Location: ../user_list.php");
}


?>