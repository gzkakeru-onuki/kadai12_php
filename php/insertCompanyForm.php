<?php
session_start();
ini_set("display_errors", 1);
include("../functions/functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/insertcompanyform.css">
    <title>求人登録画面</title>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h1 class="title">求人登録画面</h1>
            <form id="registrationForm" action="./insertCompany.php" method="post" enctype="multipart/form-data">
                <div class="form-input">
                    <label for="name">企業名</label><br>
                    <input id="name" type="text" name="name" placeholder="企業名（例：株式会社Nikinabi）" required><br>
                    <div id="nameError" class="error"></div>
                </div>
                <div class="form-input">
                    <label for="mail">求人タイトル</label><br>
                    <input id="mail" type="text" name="title" placeholder="海外事業を推進したいCTO候補を募集！" required><br>
                    <div id="mailError" class="error"></div>
                </div>
                <div class="form-input">
                    <label for="img">求人イメージ</label><br>
                    <input id="img" type="file" name="img" required><br>
                </div>

                <div class="form-input">
                    <label for="category">カテゴリ</label><br>
                    <select name="category" id="category">
                        <option value="新卒">新卒</option>
                        <option value="中途">中途</option>
                        <option value="パートタイム">パートタイム</option>
                        <option value="フリーランス">フリーランス</option>
                    </select>
                    <div id="numberError" class="error"></div>
                </div>
                <div class="form-input">
                    <label for="language">使用言語</label><br>
                    <select name="language" id="language">
                        <option value="HTML/CSS">HTML/CSS</option>
                        <option value="Javascript">Javascript</option>
                        <option value="PHP">PHP</option>
                        <option value="Python">Python</option>
                        <option value="Ruby">Ruby</option>
                        <option value="Java">Java</option>
                    </select>
                    <div id="numberError" class="error"></div>
                </div>
                <div class="form-input">
                    <label for="location">勤務地</label><br>
                    <input id="location" type="text" name="location" placeholder="東京都渋谷区神宮前６丁目３５−３ 011 JUNCTION harajuku" required><br>
                    <div id="passwordError" class="error"></div>
                </div>
                <div class="form-input">
                    <label for="address">住所</label><br>
                    <input id="text" name="address" placeholder="東京都渋谷区神宮前６丁目３５−３ 011 JUNCTION harajuku" required><br>
                    <div id="addressError" class="error"></div>
                </div>
                <div class="form-input">
                    <label for="description">求人内容</label><br>
                    <textarea name="description" id="description" placeholder="自由に働く少数精鋭のAI開発/新規事業チームで働きませんか"></textarea>
                </div>
                <div>
                    <input class="submitBtn" type="submit" value="登録する">
                </div>
            </form>
        </div>
    </div>

</body>

</html>