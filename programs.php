<?php
include('./my.php');
include('./conn.php');

echo "I am Index".$b;
echo "------------------------------------------".$b;

for($i=0;$i<10;$i++){
echo $i+1;
echo $b;
}

echo(rand(10, 100));

echo "------------------------------------------".$b;

// $arrrrrr=['apple','banana','chickoo','mango'];
$arrrrrr=array('mango','banana','apple','chickoo');
sort($arrrrrr);

for($i=0;$i<count($arrrrrr);$i++){
echo $arrrrrr[$i].$b;
}

foreach($arrrrrr as $l){
echo $l.$b;
}
echo "------------------------------------------".$b;
//Multidimension array containing Associative array

$assocc=[
    array("name"=>"Apple","color"=>"red"),
array("name"=>"banana","color"=>"K"),
array("name"=>"chickoo","color"=>"Ks")
];

foreach($assocc as $i){
    echo $i['name'].' color is '.$i['color'].$b;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opp</title>
    <style>
        body{
            background-color: red;
            color: #fff;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    
</body>
</html>