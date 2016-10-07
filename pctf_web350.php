<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2016/5/7
 * Time: 13:31
 */
#$a='s:5:"guest";';
#echo unserialize($a);
$b='admin00%00%00%00%00%00%00%88%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%00%08%guest';
$x=serialize($b);
echo serialize($b);
#echo unserialize($x);
?>