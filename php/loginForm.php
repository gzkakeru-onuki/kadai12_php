<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>ログイン画面</title>
</head>

<body>
    <div class="container">
    <form action="login.php" method="post">
        <div class="form-container">
            <h1 class="title">ログイン画面</h1>
            <form id="registrationForm" action="createaccount.php" method="post">
                
                <div class="form-input">
                    <label for="mail">メールアドレス</label><br>
                    <input id="mail" type="text" name="mail"   placeholder="nikinabi@nikinabi.com" required><br>
                    <div id="mailError" class="error"></div>
                </div>
                
                <div class="form-input">
                    <label for="password">パスワード</label><br>
                    <input id="password" type="password" name="password" placeholder="password1234" required><br>
                    <div id="passwordError" class="error"></div>
                </div>
                
                <div>
                    <input class="submitBtn" type="submit" value="ログイン">
                </div>

                <div class="login">
                    <a class="link" href="./userinfo.php">アカウントがない方はこちらへ</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>