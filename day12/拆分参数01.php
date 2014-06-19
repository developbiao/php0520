<?php
header("Content-Type:text/html; charset=utf-8");
$str = "http://localhost/www/www/abc/www/index.php?id=10&name=jokey&sex=male";

$arr = parse_url($str);

$query = $arr['query'];

$arr2 = explode('&', $query);

//自己写一个分割方法

foreach ($arr2 as $val){

	$arr3 = explode('=', $val);
	$arr4[$arr3[0]] = $arr3[1];
}



echo "<pre>";
print_r($arr4);
echo "</pre>";

?>