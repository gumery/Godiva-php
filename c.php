<?php

function generate_str( $length = 0 ) {
// 密码字符集，可任意添加你需要的字符
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $password = '';
    for ( $i = 0; $i < $length; $i++ )
    {
       // 这里提供两种字符获取方式
       // 第一种是使用 substr 截取$chars中的任意一位字符；
       // 第二种是取字符数组 $chars 的任意元素
       // $password .= substr($chars, mt_rand(0, strlen($chars) – 1), 1);
       $password .= $chars[ mt_rand(0, strlen($chars) - 1) ];
    }
    return $password;
}

$arr = [];
for ($i = 0; $i < 1000; $i++) {
    $arr[] = generate_str(10);
}

echo count(array_unique($arr));
?>
