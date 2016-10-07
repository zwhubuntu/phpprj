<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2016/1/17
 * Time: 18:38
 */
$str1='${phpinfo()}';
$str=@(string)$str1;
eval('$str="'.addslashes($str).'";');
echo '$str="'.addslashes($str).'";';
?>