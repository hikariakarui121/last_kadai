<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <title>新規投稿作成</title>
</head>
<body>
  <header>
        <p>新規登録画面</p>
 </header>
  

  <div>
    <form  action="insert2.php" method="POST" id="touroku">
        <fieldset >
        <legend>新規登録画面</legend>
        <label>IDの登録&nbsp;&nbsp;：<input type="text" name="lid"></label><br>
        <label>PWの登録：<input type="text" name="lpw"></label><br>
        <label>氏名&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;：<input type="text" name="name"></label><br>
        <input type="submit" value="新規登録"><br>
        <label>※IDとPWは英数字のみ使用が可能。<br>
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