<?php

function calculateFactorial($n) {
    $result = 1;
    $i = 1;

    while ($i <= $n) {
        $result *= $i;
        $i++;
    }

    return $result;
}

// 예제로 호출
$result = calculateFactorial(5);
echo "팩토리얼 결과: " . $result;

?>

https://www.mycompiler.io/view/6DiFqzfUhxL
