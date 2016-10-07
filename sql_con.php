<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2016/1/5
 * Time: 12:03
 */
$mysqli=new mysqli('localhost','root','xiaohui','security');
echo "version:".$mysqli->get_server_info()."<br>";
echo "default charset:".$mysqli->character_set_name();
?>