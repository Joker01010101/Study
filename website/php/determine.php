<!-- ref:https://www.w3schools.com/php/php_operators.asp -->
<?php
// 單純比較值
$x = 12;  
$y = "12";
var_dump($x == $y);
// output:bool(true)

// 值和類型都要一樣
$x = 12;  
$y = "12";
var_dump($x === $y);
// output:bool(false)

// 如果值一樣回傳false
$x = 12;  
$y = "12";
var_dump($x != $y); 
// output:bool(false)

// 如果值一樣回傳false
$x = 12;  
$y = "12";
var_dump($x <> $y); 
// output:bool(false)

// 如果值不同，或類型不同回傳true
$x = 12;  
$y = "12";
var_dump($x !== $y);
// output:bool(true)

$x = 13;  
$y = 24;
var_dump($x > $y);
// output:bool(false)

$x = 13;  
$y = 24;
var_dump($x < $y);
// output:bool(true)

$x = 13;  
$y = 24;
var_dump($x >= $y);
// output:bool(false)

$x = 13;  
$y = 24;
var_dump($x >= $y);
// output:bool(true)


// 比大小 
// 前者比較小回傳負值
$x = 2;  
$y = 8;
echo ($x <=> $y); 
echo "<br>";
// output:-1

// 前後一樣大回傳0
$x = 23;  
$y = 23;
echo ($x <=> $y); 
echo "<br>";
// output:0

// 前者比較大回傳正值
$x = 8;  
$y = 2;
echo ($x <=> $y);
// output:1
?>












