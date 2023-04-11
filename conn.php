<?php 
$c= mysqli_connect('localhost','root','','user_db');
$b='<br>';
if ($c) {
}else{
    echo "Noo";
    die("Not connected");
}
?>
