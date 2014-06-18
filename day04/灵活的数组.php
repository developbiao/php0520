<?php
//php中数组的赋值

$arr[] = "gongbiao";
$arr[] = "21";
$arr[] = "32";
$arr[] = "nan";

echo "<pre>";
print_r($arr);
echo "</pre>";

for ($i = 0; $i < 4; $i++){
	echo "<h3>$arr[$i]</h3>";
}

echo "</hr>";
echo "<h3>name:$arr[0]</h3>";
?>