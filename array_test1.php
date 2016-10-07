<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2015/11/30
 * Time: 11:42
 */
$vegetables=array("土豆" => "apotatoes","tomato","洋葱" =>"onion");
$fruit= array("apple","banana","orange");
#$newarray=$vegetables+$fruit;
$newarray=array_merge($vegetables,$fruit);
foreach ($newarray as $key =>$value){
    echo $key."=".$value."<br/>";
}
?>