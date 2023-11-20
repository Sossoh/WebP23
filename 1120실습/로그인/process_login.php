<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Process</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $password = $_POST["password"];

    echo "로그인: " . $login . "<br>";
    echo "비밀번호: " . $password . "<br>";

    echo $login . " 님! 어서오세요!";
} else {
    header("Location: log.html");
    exit();
}
?>

</body>
</html>
