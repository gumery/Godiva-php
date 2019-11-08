<?php
//模式分隔符后的"i"标记这是一个大小写不敏感的搜索
//$preg = '/^.*\.(?!php|html)/';
$preg = '/Windows(?!95|98|NT|2000)/';
$str = 'Windows2000';
$res = preg_match($preg, $str, $matches);
var_dump($matches);
?>
