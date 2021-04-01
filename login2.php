<?php

session_start();
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];

// DB接続
try {
  $pdo = new PDO('mysql:dbname=last_kadai;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

// 下記セレクト文注意（ここでめちゃエラーでた）
$sql = "SELECT * FROM users WHERE lid=:a1 AND lpw=:a2";
$stmt =$pdo->prepare($sql);
$stmt->bindValue(':a1',$lid);
$stmt->bindValue(':a2',$lpw);
$res =$stmt->execute();

if ($res==false) {
  $error = $stmt->errorInfo();
  exit("エラー:".$error[2]);
} 

  $val =$stmt->fetch();
  
  // 認証OKの場合の処理
  // sessionを使うことでダイレクトにページ推移できなくなる（セキュリーティ対策）
  if( $val["id"] !=""){
    $_SESSION["chk_ssid"] =session_id();
    $_SESSION["name"] =$val["name"];
    header("Location: main2.php");

    // 認証NGの場合の処理
  }else{
    header("Location: index.php");
  }
  exit();
?>