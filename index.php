<!-- TOP画面&登録した投稿クチコミを貯めてある場所 -->

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

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <title>TOP画面</title>
</head>

<body>
  <header>
      <div id="inner">
        <h1>TABI＊旅ツー</h1>
        <form  action="login2.php" method="post" id="login">
          <label class="login">ID&nbsp;&nbsp;:<input type="text" name="lid"></label><br>
          <label class="login">PW:<input type="text" name="lpw"></label><br>
          <div id="btn"><input type="submit" value="ログイン" ></div>
          <div id="btn"><a href="touroku.php">※新規登録はこちら</a></div>
        </form>
       </div>
        <hr>
  </header>

    <div class="first">
      <h1>山梨県の隠れ名所”猿橋”</h1>
      <p>📍山梨県</P>
    </div>

  <!-- メインの中身を書いていく -->
  <!-- 画像が表示されない -->

    <div class ="main">
      <div class="top">
        <p>・・・旅のしおり・・・<p>
      </div>

      <div class="content">
        <?=$view?>
      </div>
    </div>

   <!-- ※ここから、フッター -->
  <footer>
    <hr>
    <ul id="info">
      <li><a href="index.php">home</a></li>
      <li><a href="">問い合わせ</a></li>
    </ul>
    <small>&copy; 2022 tabi*旅ツーサイト.</small>
  </footer>

  
</body>
</html>
    
