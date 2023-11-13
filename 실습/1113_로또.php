<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    $arr = range(1,45);
    shuffle($arr);
    $i = array_slice($arr,0,6);
    sort($i);
    echo "숫자:".implode(",",$i);
    
    ?>
</body>
</html>
