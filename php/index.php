<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>TOPPAGE</title>
</head>

<body>
    <img class="logo" src="../images/NikiNabi.png" alt="ロゴ写真">
    <div class="main-head">
        <h1 class="main">ブラック企業を許すな</h1>
        <p class="main-description">共感できる想い、価値観がある。<br>
            スキルや性格に合った挑戦が見つかる。<br>
            「NikiNabi」は、400万人のユーザーと1,000,000社が登録する<br>
            ”ココロオドル”シゴトと出会えるビジネスSNS。<br>
            さあ、ここから、夢中になれるキャリアを描きませんか？</p>
    </div>
    <p class="border">get started with... 無料でログインまたは新規登録</p>
    <form action="./userinfo.php" class="create-account" method="post">
        <p>メールアドレス</p>
        <input type="email" placeholder="youremail@nukinabi.com" name="email"><br><br>
        <p>パスワード</p>
        <input type="password" name="password" placeholder="niki_ha_css_benkyoutyu!"><br>
        <div class="login-link"><a href="./loginForm.php">ログインはこちら</a></div>
        <button class="nextBtn" type="submit">次へ</button>
    </form>
</body>

</html>