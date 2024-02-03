<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>課題_016</title>
  </head>
<body>
  
  <p>
    <?php 
    class Food {
      private $name;
      private $price;

      public function __construct(string $name,int $price){
        $this->name = $name;
        $this->price = $price;
      }
      // メソットを定義する 価格改定
      public function set_price(int $price){
      $this->price = $price . '<br>';
      }

      //メソットを定義する 価格表示
        public function show_price(){
          echo $this->price . '<br>';
        }
      }

      $food = new Food('potato',250);
      print_r($food);
      echo '<br>';

      class Animal {
        private $name;
        private $height;
        private $weight;

        public function __construct(string $name, int $height,int $weight){
          $this->name = $name;
          $this->height = $height;
          $this->weight =$weight; 
        }

        // メソットを定義する 身長変更
      public function set_height(int $height){
        $this->height = $height . '<br>';
        }
  
        //メソットを定義する 身長表示
          public function show_height(){
            echo $this->height . '<br>';
          }
      }
      
      $animal = new Animal('dog',60,5000);
      print_r($animal);
      echo '<br>';
    
    $food->show_price();
    $food->set_price(300);
    $food->show_price();

    $animal->show_height();
    $animal->set_height(70);
    $animal->show_height();
    
    ?>
    </p> 


