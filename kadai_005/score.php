<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>kadai_05</title>
</head>
<body>
  <p>
    <?php
    // 生徒10人分の点数を入れる変数score1〜score10
    $score_1 = 80;
        $score_2 = 60;
        $score_3 = 55;
        $score_4 = 40;
        $score_5 = 100;
      $score_6 = 25;
      $score_7 = 80;
      $score_8 = 95;
      $score_9 = 30;
      $score_10 = 60;

      // 合計点
      $score_sum = ($score_1 + $score_2 + $score_3 + $score_4 + $score_5 + $score_6 + $score_7 + $score_8 + $score_9 + $score_10);
      
      // 平均点
      $score_avg = $score_sum / 10;
      echo $score_avg;

    ?>

  </p>
</body>
</html>