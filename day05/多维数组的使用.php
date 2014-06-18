<?php
/*
@Describe:多维数组的使用
*/

//1 一维数组的使用

header("content-type:text/html; charset=utf-8");

$arr1 = array(1, 2, 3);

//二组数组的使用
$arr2 = array(1, 2, array(3, 4));

echo "<h3>{$arr2[2][1]}</h3>";


// 3 三维数组的使用

$arr3 = array(1, 2, 3, array(4, 5, a, c, array(7, 8 ,11)));

echo "<h3>{$arr3[3][4][2]}</h3>";


/*

  查看多维数组
*/

  echo "<hr/>";

  $arr4[0] [4] = "a";
  echo "<pre>";
  print_r($arr4);
  echo "</pre>";


?>
