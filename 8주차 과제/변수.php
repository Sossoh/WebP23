<?php

$userInput = $_POST['user_input']; 

if (is_numeric($userInput)) {
    $result = processNumber($userInput);


    echo "입력 값: $userInput, 출력 값: $result";
} else {
    echo "숫자를 입력하세요.";
}


function processNumber($a) {
    if ($a % 2 == 1) {
        $result = $a + 1; 
    } else {
        $result = $a;
    }

    return $result;
}

?>


실행결과 - https://www.mycompiler.io/ko/new/php?fork=HFQLud56MIm
