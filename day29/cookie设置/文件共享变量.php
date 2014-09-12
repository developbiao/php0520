<?php
/*
 * @Describe:用文件的方式实现变量共享
 * @Date:2014/08/22
 */
$name = "牛牛";
$str = '<?php $name = "user1"?>';
file_put_contents("user.php", $str);

?>
