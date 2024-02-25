<?php 
$employee_name = $_POST['employee_name'];
$employee_age = $_POST['employee_age'];
$department = $_POST['department'];
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
  <meta charset="UTF-8">
  <title>社員入力ホームを作成しよう</title>
  </head>
  <body>
    <h2>入力内容をご確認ください。</h2>
    <p>問題がなければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
    <table border="1">
      <tr>
        <th>項目</th>
        <th>入力内容</th>
      </tr>
      <tr>
        <td>社員名</td>
        <td><?php echo $employee_name; ?></td>
      </tr>
      <tr>
        <td>年齢</td>
        <td><?php echo $employee_age; ?></td>
      </tr>
      <tr>
        <td>所属部署</td>
        <td><?php echo $department; ?></td>
      </tr>
    </table>
    <p>
      <button id="confirm-btn">確定</button>
      <button id="cancel-btn">キャンセル</button>
      <!-- <button id="confirm-btn" onclick="location.href='complete.php';">確定</button> -->
      <!-- <button id="cancel-btn" onclick="history.back();">キャンセル</button> -->
    </p>
    <script>
      const btn1 = document.getElementById('confirm-btn');
      btn1.addEventListener('click',function(){
        location.href='complete.php';
      });

      const btn2 = document.getElementById('cancel-btn');
      btn2.addEventListener('click',function(){
        history.back();
      });
    </script>
  </body>
  
</html>


