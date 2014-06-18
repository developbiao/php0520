<?php
header("content-type=text/html; charset=utf-8");
$score = 99;
$name = "玲玲";

if ($socre >= 90 && $socre  < 100){
	echo "<h3>A+</h3>";
}else if ($socre >=80 && socre < 90){
	echo "<h3>A</h3>";

}else if ($socre >=70 && socre < 80){
	echo "<h3>B</h3>";

}else{
	echo "<h3> C</h3>";

}

?>