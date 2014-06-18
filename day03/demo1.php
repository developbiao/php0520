<?php
	header("content-type:text/html; charset=utf-8");

	function sum(){
		$count = func_num_args();
		$arry = func_get_args();

		echo "testing";
		//$sum;
		//echo $count;
		//print_r($arry);

		for ($i = 1; $i < $count; $i++){

			$sum += $arry[$i];


		}

		return $sum;

	}

	//echo sum(1,3,5,7,9,2,-33,88);
	echo sum(7, 8, 10, 22, 33, 8, 3, 22, 11);

?>