<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        $nums = [15, 4, 18, 23, 10 ];

        // キーと値の相関関係維持しない、配列を昇順にソートする
        echo "昇順にソートします。<br>";

        $num = array(15, 4, 18, 23, 10);

        sort($num, SORT_NUMERIC);
        foreach ($num as $val) {
            echo "$val<br>";
        }

        // キーと値の相関関係維持しない、配列を降順にソートする
        echo "降順にソートします。<br>";

        rsort($num, SORT_NUMERIC);
        foreach ($num as $val) {
            echo "$val<br>";
        }

        ?>
    </p>
</body>

</html>
