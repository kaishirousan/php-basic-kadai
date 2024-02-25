<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>社員入力ホームを作成しよう</title>
  </head>

  <body>
    <h1>登録が完了しました。</h1>
    <p>社員情報がデータベースに保存されました。</p>
    <button id="back-btn">戻る</button>
    <!-- <button id="back-btn" onclick="location.href='form.php';">戻る</button> -->
    <script>
      const btn3 = document.getElementById('back-btn');
      btn3.addEventListener('click',function(){
        location.href='form.php';
      });
    </script>
  </body>

</html>

