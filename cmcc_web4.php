<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2016/5/28
 * Time: 19:46
 */
$user_arr=array("user" => TRUE,"pass" =>TRUE);
$str=serialize($user_arr);
$str1=unserialize($str);
echo $str;
?>