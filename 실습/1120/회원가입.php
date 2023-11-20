<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>회원정보받기</title>
</head>
<body>
<?php
$nameMsg = $emailMsg = $websiteMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameMsg = "이름을 입력해 주세요!";
    } else {
        $name = $_POST["name"];
        if (!preg_match("/^[a-zA-Z가-힣 ]*$/", $name)) {
            $nameMsg = "영문자와 한글만 가능합니다!";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["ID"])) {
            $IDMsg = "아이디 입력해주세요";
        } else {
            $ID = $_POST["ID"];
            if (!preg_match("/^[a-zA-Z0-9]*$/", $ID)) {
                $IDMsg = "영문자와 숫자만 가능합니다!";
            }
        }

    if (empty($_POST["gender"])) {
        $genderMsg = "성별을 선택해 주세요!";
    } else {
        $gender = $_POST["gender"];
    }

    if (empty($_POST["email"])) {
        $emailMsg = "이메일을 입력해 주세요!";
    } else {
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailMsg = "이메일을 정확히 입력해 주세요!";
        }
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    이름: <input type="text" name="name">
    <span class="error"><?php echo $nameMsg; ?></span><br>
    아이디: <input type="text" name="ID">
    <span class="error"><?php echo $IDMsg; ?></span><br>
    성별:
    <input type="radio" name="gender" value="female">여자
    <input type="radio" name="gender" value="male">남자
    <span class="error"><?php echo $genderMsg; ?></span><br>

    이메일: <input type="text" name="email">
    <span class="error"><?php echo $emailMsg; ?></span><br>


    관심 있는 분야 :
    <input type="checkbox" name="favtopic[]" value="movie"> 영화
    <input type="checkbox" name="favtopic[]" value="music"> 음악
    <input type="checkbox" name="favtopic[]" value="game"> 게임
    <input type="checkbox" name="favtopic[]" value="coding"> 코딩
    <br>

    기타 : <textarea name="comment"></textarea><br>

    <input type="submit" value="전송">
</form>

</body>
</html>