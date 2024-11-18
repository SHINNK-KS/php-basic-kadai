<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>kadai_016</title>
  </head>

  <body>
    <p>
      <?php
      class Food {
        // プロパティを定義する
        private $name;
        private $price;

        // メソッドを定義する
        public function show_price() {
          echo $this->price . '<br>';
        }

        // コンストラクタを定義する
        public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
        }
      }

      class Animal {
        // プロパティを定義する
        private $name;
        private $height;
        private $weight;

        // メソッドを定義する
        public function show_height() {
          echo $this->height . '<br>';
        }

      // コンストラクタを定義する
      public function __construct(string $name, int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;      
      }
    }

      // インスタンス化
      $food = new Food('potato', 250);
      echo '<br>';
      $animal = new Animal('dog', 60, 5000);

      // プロパティへのアクセス
      print_r($food);
      echo '<br>';
      print_r($animal);

      echo '<br>';

      //　メソッドへのアクセス
      $food->show_price();
      $animal->show_height();
      
      ?>
    </p>
  </body>
</html>