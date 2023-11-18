<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$filename = 'client.txt';

// 파일이 존재하는지 확인
if (file_exists($filename)) {
    $lines = file($filename, FILE_IGNORE_NEW_LINES);


    foreach ($lines as $line) {
        // 탭으로 구분된 값을 배열로 분할
        $data = explode("\t", $line);
        
        if (isset($data[1]) && intval($data[1]) >= 30) {
            echo "이름: {$data[0]}, 나이: {$data[1]}, 성별: {$data[2]}, 이메일: {$data[3]}\n";
        }
    }
} else {
    echo "파일 '$filename'이 존재하지 않습니다.";
}
?>

</body>
</html>