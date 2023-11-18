<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
function revsort(&$array) {
    sort($array);
    $array = array_reverse($array);
}

$numbers = [5, 2, 8, 1, 3];

revsort($numbers);

print_r($numbers);
?>

</body>
</html>