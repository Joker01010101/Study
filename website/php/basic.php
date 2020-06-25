<?php 
$x = "what's your name?";
$y = 'My name is Max';

echo $x;
echo "<br>"; 
echo $y;
// output:what's your name?
// 		  My name is Max

// 顯示資料類別跟內容 
$x = 9876;
var_dump($x);
$y = 8765.4321;
var_dump($y);
$z = "qwer";
var_dump($z);
// output:int(9876) float(8765.4321) string(4) "qwer"

// 陣列
$NBA = array("kobe","jordan","leonard");
var_dump($NBA);
// output:array(3) { [0]=> string(4) "kobe" [1]=> string(6) "jordan" [2]=> string(7) "leonard" }

// 計算物件的長度
echo strlen("I love listening to music");
// output:25

// 計算物件的單字數量
echo str_word_count("I love listening to music");
// output:5

// 查特定物件位置
echo strpos("I love listening to music","love")
// output:2

// 取代原本的內容
echo str_replace("batman","joker","He is batman.")
// output:He is joker.
?>