<!DOCTYPE HTML>
<html lang = "ja">
<head>
    <meta charset="UTF-8">
    <title> フォーム入力</title>
</head>
<body>

<h1>プロフィール入力</h1>
<form method = "post">
    <label>
        名前:
        <input type = "text" name = "name">
    </label>
    <br><br>

    <label>
        年齢:
        <input type = "number" name = "age">
    </label>
    <br><br>

    <button type = "submit">送信</button>
</form>

<hr>

<?php
//送信された時だけ表示
if(!empty($_POST)){
    $name = $_POST["name"];
    $age = $_POST["age"];

    echo "<h2>入力結果</h2>";
    echo "<p>名前:{$name}</p>";
    echo "<p>年齢:{$age}歳</p>";
}
?>
</body>
</html>