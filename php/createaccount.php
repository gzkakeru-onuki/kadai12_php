<?php
session_start();
ini_set("display_errors", 1);

$name = $_POST["name"];
$mail = $_POST["mail"];
$number = $_POST["number"];
$password = $_POST["password"];
$address = $_POST["address"];
$role = $_POST["role"];

include("../functions/functions.php");
$pdo = db_conn();

//３．データ登録SQL作成

$sql = "INSERT INTO users(name, mail, number, password, address, role, created_at) VALUES (:name,:mail,:number,:password,:address,:role,sysdate());";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
$stmt->bindValue(':number', $number, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$stmt->bindValue(':address', $address, PDO::PARAM_STR);
$stmt->bindValue(':role', $role, PDO::PARAM_INT);
$status = $stmt->execute(); // SQL実行

//４．データ登録処理後
if ($status == false) { // 登録処理にエラーがあれば
    sql_error($stmt);
} else {
    $_SESSION["name"]=$name;
    head("main.php");
}
