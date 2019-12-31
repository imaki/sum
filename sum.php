<?php
// 課題1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
 function calc($price){
  $result = $price * 2;
    return    $result;
}    
    $price = calc(5);
    echo $price . PHP_EOL;
    
// 課題2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function sum($a , $b){
  return  $a + $b;
}
    $result = sum(50 , 50);
    echo $result . PHP_EOL;
    
// 課題3  $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。 
function x($arr) {
  $result = 1;
  foreach($arr as $x){
  
    $result *= $x;
  }
  return $result;
}     
   echo x(array(1 , 3 , 5 , 7 , 9));
   echo PHP_EOL;
    // 課題4 次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
    if($max_number < $a){
      $max_number = $a;
    }
  }
  return $max_number;
} 
$array = [6, 2, 3, 10, 5];
echo max_array($array);
echo PHP_EOL;
    
// 課題５
// strip_tags — 文字列から HTML および PHP タグを取り除く
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

// <p> と <a> は許可します
echo strip_tags($text, '<p><a>');

// array_push — 一つ以上の要素を配列の最後に追加する
$stack = array("orange", "banana");
 array_push($stack, "apple", "raspberry");
 print_r($stack);

// array_merge — ひとつまたは複数の配列をマージする
$array1 = array(0 => 'zero_a', 2 => 'two_a', 3 => 'three_a');
  $array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b');
  $result = $array1 + $array2;
   var_dump($result);

// mktime — 日付を Unix のタイムスタンプとして取得する
// time — 現在の Unix タイムスタンプを返す
date_default_timezone_set("Asia/Tokyo");
// 上記の例は東京のタイムゾーンを設定
 echo
    date("Y年m月d日",mktime(
        0,//時
        0,//分
        0,//秒
        date("m"),
        date("d")+14,
        date("Y")
    ))    
   ?>
  
  
  
  
   
   