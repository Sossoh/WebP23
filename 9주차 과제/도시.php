<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
// 각각정의
$cities = array(
    'Kim' => 'Seoul',
    'Lee' => 'Pusan, Daegu',
    'Choi' => 'Inchon',
    'Park' => 'Suwon, Daejon',
    'Jung' => 'Kwangju, Chunchon, Wonju'
);

//Choi없애기 
unset($cities['Choi']);

foreach ($cities as $person => $city) {
    echo "$person: $city\n";
}
?>

</body>
</html>