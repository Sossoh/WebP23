<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$rows = 5;


for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo chr(65 + $j) . " ";
    }
    echo "\n";
}


for ($i = $rows - 2; $i >= 0; $i--) {
    for ($j = 0; $j <= $i; $j++) {
        echo chr(65 + $j) . " ";
    }
    echo "\n";
}
?>

</body>
</html>