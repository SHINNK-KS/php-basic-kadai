<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>kadai_011</title>
  </head>
  <body>
    <p>
      <?php
      $product = [
        'name' => '玉ねぎ',
        'price' => 200,
        'area' => '北海道'
      ];

      //foreach文キーと値を出力する
      foreach ($product as $key => $value) {
                echo "{$key}: {$value}<br>";
      }
      ?>
    </p>
  </body>
</html>