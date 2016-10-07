<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2015/12/19
 * Time: 19:30
 */


$str=@(string)$_GET['str'];
eval('$str="'.addslashes($str).'";')
?>