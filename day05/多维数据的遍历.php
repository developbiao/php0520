<?php
/*
@Describe:多维数组
@Date:2014/06/11
*/
header("content-type:text/html; charset=utf-8");

$arr1 = array("a", "b", "c", array("d", "f", "e", array(12, true, false, 'm', 'g')));

echo "<pre>";
print_r($arr1);
echo "</pre>";
echo "<hr/>";


	//foreach 数组的遍历

foreach($arr1 as $value){
	if (is_array($value)){
		foreach($value as $value1){

			if (is_array($value1)){

				foreach($value1 as $value2){

					echo "<h3> $value2</h3>";

				}

				//echo "<h3> $value1</h3>";
			}else{


				echo "<h3> $value1</h3>";
			}

		}
	}else{
		echo "<h3> $value</h3>";
	}
}


?>
