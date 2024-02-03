<!DOCTYPE html>
<html lang="ja">
  <head>
  <meta charset="UTF-8">
  <title>PHP基礎</title>
  </head>

  <body>
    <p>
      <?php 
      $nums = [15, 4, 18, 23, 10 ];

      function sort_2way ($array,$order){
        if($order === TRUE){
          sort($array);
        echo '昇順にソートします<br>';
        foreach($array as $value){
          echo $value . '<br>';
        }
        } else {
          rsort($array);
        echo '降順にソートします<br>';
        foreach($array as $value){
          echo $value . '<br>';
        }
        }
      }

      sort_2way($nums,TRUE);

      sort_2way($nums,FALSE);
      ?>
    </p>
  </body>
</html>

http://localhost:8888/php-basic/kadai_sort/sort.php
<p>
foreach(要素を取り出す配列名 as 取り出した要素を代入する変数名){　<br>
      echo 取り出した要素を代入する変数名 
}
</p>
      
      
