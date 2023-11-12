<?php

if (isset($_POST['user_input'])) {
    $userInput = $_POST['user_input'];

    if (is_numeric($userInput)) {
        $result = processNumber((int)$userInput); 

        echo "입력 값: " . htmlspecialchars($userInput) . ", 출력 값: " . htmlspecialchars($result);
    } else {
        echo "숫자를 입력하세요.";
    }
} else {
    echo "입력 값을 찾을 수 없습니다.";
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


실행결과 - https://www.mycompiler.io/view/LhbH4WXbrlw
