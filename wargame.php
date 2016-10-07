<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2016/3/18
 * Time: 22:55
 */
$key = uniqid("welcome to wargame.kr!_", true);
#echo $key;
$key = sha1($key);
echo $key;
?>