<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2016/1/19
 * Time: 10:06
 */
function clean($str){
    if(get_magic_quotes_gpc()){
        $str=stripslashes($str);
    }
    return htmlentities($str, ENT_QUOTES);
}

$str1="admin"."\\";
$str2="||1#";
$username = clean($str1);
$password = clean($str2);

$query='SELECT * FROM users WHERE name=\''.$username.'\' AND pass=\''.$password.'\';';
echo $query;

?>