<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$filename = 'exam.txt';

if (file_exists($filename)) {
    $content = file_get_contents($filename);
    $lineCount = count(file($filename));
    $wordCount = str_word_count($content);
    $charCount = strlen($content);


    echo "파일 '$filename'의 통계:\n";
    echo "줄 수: $lineCount\n";
    echo "단어 수: $wordCount\n";
    echo "글자 수: $charCount\n";
} else {
    echo "파일 '$filename'이 존재하지 않습니다.";
}
?>

</body>
</html>