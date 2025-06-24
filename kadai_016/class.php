<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       // クラスを定義する
       class Food {
        // プロパティを定義する
        private $name;
        private $price;
       

       // コンストラクタを定義する
       public function __construct(string $name,int $price) {
        $this->name = $name;
        $this->price = $price;
       }      
       
       // メソッド　show_price の定義
       public function show_price() {
        echo $this->price;

       }
      }

      // インスタンス生成
      $potato = new Food("potato", 250);

      // メソッドの呼び出し
      echo $potato->show_price();

      // インスタンスの出力
      echo '<pre>';
      print_r($potato);
      echo '</pre>';
    
    


     // クラスを定義する
     class Animal {
      // プロパティを定義する
       private $name;
       private $height;
       private $weight;
        

       // コンストラクタを定義する
       public function __construct(string $name,int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;

  
       }      
       
       // メソッド　show_price の定義
       public function show_height() {
        echo $this->height;

       }
      }

      // インスタンス生成
      $dog = new Animal("dog", 60, 5000);

      // メソッドの呼び出し
      echo $dog->show_height();

      // インスタンスの出力
      echo '<pre>';
      print_r($dog);
      echo '</pre>';
    
    
    ?>
   </p>
</body>
</html>