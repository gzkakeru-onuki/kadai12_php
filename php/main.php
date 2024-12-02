<?php
session_start();

include("../functions/functions.php");

$name = $_SESSION["name"];

$pdo = db_conn();

//３．データ登録SQL作成
$sql = "SELECT * FROM companys ORDER BY posted_at DESC";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//４．データ登録処理後
if ($status == false) { // 登録処理にエラーがあれば
    sql_error($stmt);
}

$values =  $stmt->fetchAll(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC[カラム名のみで取得できるモード] 連想配列で全て入っている


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
    <title>Nikinabi (ニキナビ)</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="header-logo"><a href="./main.php"><img class="logo" src="../images/NikiNabi.png" alt=""></a></div>
            <div class="recruit">
                <p>募集</p>
            </div>
            <div class="mypage">
                <p>マイページ</p>
            </div>
            <form action="search.php" method="post">
                <div class="search"><input class="search-input" name="word" type="text" placeholder="search interest company..."><input class="search-logo" type="submit" value="&#xf002"></div>
            </form>
            <div class="login-user">
                <p class="username"><?= $name; ?>さん</p>
            </div>
            <div class="logout"><a class="logout-link" href="./logout.php">ログアウト</a></div>
        </div>

        <div class="recommend-title">今週のおすすめ企業</div>
        <div class="recommend">
            <?php
            if (!empty($values)) {
                $totalvalues = count($values);
                for ($i = 0; $i < 3; $i++) {
                    $randomIndex = rand(0, $totalvalues - 1);
                    $value = $values[$randomIndex];
            ?>
                    <div class="randomcompany">
                        <img src="<?= $value["image_path"]; ?>" alt="companyimg">
                        <p class="category"><?= $value["category"]; ?></p>
                        <p class="title"><?= $value["title"]; ?></p>
                        <p class="companyname"><?= $value["name"]; ?></p>
                        <button><a href="https://www.wantedly.com/companies/dhw">詳細を見る</a></button>
                    </div>
            <?php }
            } else {
                echo "<p>表示する会社がありません</p>";
            } ?>
        </div>
        <div class="main">
            <div class="search2">
                <p class="search-title">地域</p>
                <div>
                    <a href="./search.php?location=東京">東京</a>
                </div>
                <div>
                    <a href="./search.php?location=千葉">千葉</a>
                </div>
                <div>
                    <a href="./search.php?location=神奈川">神奈川</a>
                </div>
                <div>
                    <a href="./search.php?location=埼玉">埼玉</a>
                </div>
                <div>
                    <a href="./search.php?location=群馬">群馬</a>
                </div>
                <div>
                    <a href="./search.php?location=栃木">栃木</a>
                </div>
                <div>
                    <a href="./search.php?location=山梨">山梨</a>
                </div>

                <br>

                <p class="search-title">言語</p>
                <div>
                    <a href="./search.php?language=HTML/CSS">HTML/CSS</a>
                </div>
                <div>
                    <a href="./search.php?language=Javascript">Javascript</a>
                </div>
                <div>
                    <a href="./search.php?language=PHP">PHP</a>
                </div>
                <div>
                    <a href="./search.php?language=Python">Python</a>
                </div>
                <div>
                    <a href="./search.php?language=Ruby">Ruby</a>
                </div>
                <div>
                    <a href="./search.php?language=Java">Java</a>
                </div>
            </div>
            <div class="content">

                <?php foreach ($values as $value) { ?>
                    <div class="count">
                        <h2><?= count($values); ?>件の募集</h2>
                    </div>
                    <div class="contentcompany">
                        <img src="<?= $value["image_path"]; ?>" alt="companyimg">
                        <div class="categorylabel">
                            <p class="category"><?= $value["category"]; ?></p>
                            <p class="language"><?= $value["language"]; ?></p>
                            <p class="location"><?= $value["location"]; ?></p>
                        </div>
                        <p class="title"><?= $value["title"]; ?></p>
                        <p class="description"><?= $value["description"]; ?></p>
                        <p class="companyname"><?= $value["name"]; ?></p>
                        <button><a href="https://www.wantedly.com/companies/dhw">詳細を見る</a></button>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="footer">
            <h3>株式会社NikiNabi</h3>
            <div class="icons">
                <a href="https://www.facebook.com" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

    </div>
</body>

</html>