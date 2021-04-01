<!-- ログインが実施された時の画面 -->

<?php

try {
  $pdo = new PDO('mysql:dbname=last_kadai;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

// SELECT文を作る
$sql = "SELECT * FROM touroku_table";
$stmt =$pdo->prepare($sql);
$status =$stmt ->execute();

// データ表示
$view='';
if ($status==false) {
  $error = $stmt->errorInfo();
  exit("SQLエラー:".$error[2]);
} else {
  while( $result =$stmt -> fetch(PDO**FETCH_ASSOC)){
    // .は+といっしょ
  // $view .="<p>".$result["id"]."-".$result["name"]."</p>";

  $view.="<p>";
  $view.='<img src="./img/'.$result["image"].'">'."<br>";
  $view.=" タイトル： ".$result["title"]."<br>";
  $view.=" ひとこと： ".$result["comment"]."<br>";
  $view.=$result["u_name"]."さん";
  $view.="</p>";
  }
}
?>
<img src="" alt="">

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <title>メイン画面</title>
</head>

<body>

<!-- ヘッダー部分 -->
  <header>
  <div id="inner">
      
      <p><a class="botton" href="index2.php"> 投稿する</a></p>
      <p>-ログイン中-</p>
      </div>
       
  </header>

 <div class ="main">
    <div class="top">
      <p>・・・旅のしおり・・・</p>
    </div>

    <!-- 画像が表示されない -->
    <div class="content">
    <?=$view?>
    </div>

</div>


<!-- ※ここから、フッター -->
<footer>

  <ul id="info">
    <li><a href="main2.php">home</a></li>
    <li><a href="index.php">TOPへ戻る</a></li>
    <li><a href="">問い合わせ</a></li>
  </ul>

  <small>&copy; 2022 tabi*旅ツーサイト.</small>

</footer>

  
</body>
</html>