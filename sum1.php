<?php
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
    ));
?>
