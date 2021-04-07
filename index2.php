<!-- 新規登録のためのPHP（HTML) -->

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>新規投稿作成</title>
</head>
<body>
  <header>
        <p>投稿作成画面</p>
        <p>-ログイン中-</p>
 </header>
  

  <div>
    <form  action="insert.php" method="POST" id="touroku">
        <fieldset>
        <legend>新規クチコミ記入欄</legend>
        <label>ニックネーム：<input type="text" name="u_name"></label><br>
        <label>タイトル&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;：<input type="text" name="title"></label><br>
        <label><input type="file" name="image"></label><br>
        <label>コメント<br><textArea name="comment" rows="4" cols="40"></textArea></label><br>
        <input type="submit" value="登録">
        </fieldset>
    </form>
  </div>
  
  <footer>
    <ul id="info">
      <li><a href="main2.php">home</a></li>
      <li><a href="">問い合わせ</a></li>
    </ul>
    <small>&copy; 2022 tabi*旅ツーサイト.</small>
  </footer>

</body>
</html>