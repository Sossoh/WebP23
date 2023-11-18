<?php

function calculateFactorial($n) {
    if (!is_numeric($n) || $n < 0) {
        throw new InvalidArgumentException("음수나 비숫자 값을 입력하지 마세요.");
    }

    $result = 1;
    $i = 1;

    while ($i <= $n) {
        $result *= $i;
        $i++;
    }

    return $result;
}

try {
    $result = calculateFactorial(5);
    echo "5의 팩토리얼 결과: " . $result;
} catch (InvalidArgumentException $e) {
    echo "에러: " . $e->getMessage();
}

?>


실행결과 - https://www.mycompiler.io/view/Ih2g6pKP2A1
