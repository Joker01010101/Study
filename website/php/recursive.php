<?php
// 先加再顯示
$x = 10;  
echo ++$x;
echo ",";
echo ++$x;
echo ",";
echo ++$x;
// output:11,12,13

// 先減再顯示
$x = 10;  
echo --$x;
echo ",";
echo --$x;
echo ",";
echo --$x;
// output:9,8,7

// 先顯示再加
$x = 10;  
echo $x++;
echo ",";
echo $x++;
echo ",";
echo $x++;
// output:10,11,12

// 先加在顯示
$x = 10;  
echo $x--;
echo ",";
echo $x--;
echo ",";
echo $x--;
// output:10,9,8
?>  