<?php
session_start();
ini_set("display_errors", 1);
include("../functions/functions.php");

$_SESSION["mail"] = $_POST["email"] ?? '';
$_SESSION["password"] = $_POST["password"] ?? '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/userinfo.css">
    <title>会員登録画面</title>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h1 class="title">会員登録画面</h1>
            <form id="registrationForm" action="createaccount.php" method="post">
                <div class="form-input">
                    <label for="name">氏名</label><br>
                    <input id="name" type="text" name="name" placeholder="氏名（例：Nukizon太郎）" required><br>
                    <div id="nameError" class="error"></div>
                </div>
                <div class="form-input">
                    <label for="mail">メールアドレス</label><br>
                    <input id="mail" type="text" name="mail" value="<?= $_POST["email"] ?? ''; ?>" placeholder="nikinabi@nikinabi.com" required><br>
                    <div id="mailError" class="error"></div>
                </div>
                <div class="form-input">
                    <label for="number">携帯電話番号</label><br>
                    <input id="number" type="text" name="number" placeholder="08012345678" required><br>
                    <div id="numberError" class="error"></div>
                </div>
                <div class="form-input">
                    <label for="password">パスワード</label><br>
                    <input id="password" type="password" name="password" value="<?= $_POST["password"] ?? ''; ?>" placeholder="password1234" required><br>
                    <div id="passwordError" class="error"></div>
                </div>
                <div class="form-input">
                    <label for="address">住所</label><br>
                    <input id="text" name="address" placeholder="東京都渋谷区神宮前６丁目３５−３ 011 JUNCTION harajuku" required><br>
                    <div id="addressError" class="error"></div>
                </div>
                <div class="form-input">
                    <label for="role">登録権限</label><br>
                    <select name="role" id="role">
                        <option value="0">会社員/フリーランス</option>
                        <option value="1">企業</option>
                    </select>
                    <div id="roleError" class="error"></div>
                </div>
                <div>
                    <input class="submitBtn" type="submit" value="登録する">
                </div>

                <div class="signin">
                    <a class="link" href="./loginForm.php">既にアカウントがある方はこちらへ</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>