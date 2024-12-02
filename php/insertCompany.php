<?php
session_start();
ini_set("display_errors", 1);

$name = $_POST["name"];
$title = $_POST["title"];
$category = $_POST["category"];
$location = $_POST["location"];
$address = $_POST["address"];
$language = $_POST["language"];
$description = $_POST["description"];
$image_path = "../images/" . basename($_FILES["img"]["name"]); //ファイル名を取得
include("../functions/functions.php");
$pdo = db_conn();



//３．データ登録SQL作成

if (move_uploaded_file($_FILES["img"]["tmp_name"], $image_path)) {
$sql = "INSERT INTO companys (name,title, category, location, address,language, description,image_path,posted_at) 
VALUES (:name,:title, :category, :location, :address,:language, :description,:image_path, sysdate())";

// SQL文を実行
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':category', $category, PDO::PARAM_STR);
$stmt->bindValue(':location', $location, PDO::PARAM_STR);
$stmt->bindValue(':address', $address, PDO::PARAM_STR);
$stmt->bindValue(':language', $language, PDO::PARAM_STR);
$stmt->bindValue(':description', $description, PDO::PARAM_STR);
$stmt->bindValue(':image_path', $image_path, PDO::PARAM_STR); 
$status = $stmt->execute(); // SQL実行
}else{
    echo "ファイル移動処理エラー";
    exit();
}


//４．データ登録処理後
if ($status == false) { // 登録処理にエラーがあれば
    sql_error($stmt);
} else {
    head("main.php");
}
