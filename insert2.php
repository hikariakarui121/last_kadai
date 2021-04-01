<?php

if(
  !isset($_POST["lid"]) || $_POST["lid"] ==""||
  !isset($_POST["lpw"]) || $_POST["lpw"] =="" ||
  !isset($_POST["name"]) || $_POST["name"] ==""
){
  exit('エラー');
}

$lid = $_POST["lid"];
$lpw = $_POST['lpw'];
$name = $_POST["name"];

try {
  $pdo = new PDO('mysql:dbname=last_kadai;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

$sql ="INSERT INTO users(id, name, lid, lpw, indate)VALUES(NULL,:a1, :a2, :a3, sysdate())";

$stmt =$pdo->prepare($sql);
$stmt->bindValue(':a1',$name, PDO::PARAM_STR);
$stmt->bindValue(':a2',$lid, PDO::PARAM_STR);
$stmt->bindValue(':a3',$lpw, PDO::PARAM_STR);
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

idPrimary	int(12)			No	None		AUTO_INCREMENT	Change Change	Drop Drop	
More More
	2	name	varchar(128)	utf8_general_ci		No	None			Change Change	Drop Drop	
More More
	3	lid	varchar(64)	utf8_general_ci		No	None			Change Change	Drop Drop	
More More
	4	lpw	varchar(64)	utf8_general_ci		No	None			Change Change	Drop Drop	
More More
	5	indate