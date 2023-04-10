<?php 
$c= mysqli_connect('localhost','root','','user_db');
if ($c) {
}else{
    echo "Noo";
    die("Not connected");
}
?>
