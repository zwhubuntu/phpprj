<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2015/12/16
 * Time: 19:18
 */
#$user=array("user" => true,"pass" =>true);
$pass=array("pass" =>true);
#$str=serialize($pass);
#$str1=unserialize($str);
$str1='O:3:"key":2:{s:8:"filename";s:1:"1";s:8:"filedata";s:1:"1";}';
$str=unserialize($str1);
var_dump($str);
/**
$user='a%3a2%3a%7bs%3a4%3a%22user%22%3bb%3a1%3bs%3a4%3a%22pass%22%3bb%3a1%3b%7d';
$user=urldecode($user);
$user_arr=unserialize($user);
var_dump($user_arr);
 */
?>