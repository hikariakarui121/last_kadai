<!-- 情報の登録のためのPHP -->

<?php

if(
  !isset($_POST["u_name"]) || $_POST["u_name"] ==""||
  !isset($_POST["title"]) || $_POST["title"] ==""||
  !isset($_POST["image"]) || $_POST["image"] =="" ||
  !isset($_POST["comment"]) || $_POST["comment"] ==""


){
  exit('エラー');
}

$u_name = $_POST["u_name"];
$title = $_POST["title"];
// ここを書き換え
$image = $_POST['image'];
$comment= $_POST["comment"];

try {
  $pdo = new PDO('mysql:dbname=last_kadai;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

$sql ="INSERT INTO touroku_table(id, u_name, title, image, comment, indate)VALUES(NULL,:a1, :a2, :a3, :a4, sysdate())";

$stmt =$pdo->prepare($sql);
$stmt->bindValue(':a1',$u_name, PDO::PARAM_STR);
$stmt->bindValue(':a2',$title, PDO::PARAM_STR);
$stmt->bindValue(':a3',$image, PDO::PARAM_STR);
$stmt->bindValue(':a4',$comment, PDO::PARAM_STR);
$status =$stmt->execute();


if ($status==false) {
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
} else {
  // 実行された後の画面
  header("Location: main2.php");
  exit;
}
?>