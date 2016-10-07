<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2015/12/1
 * Time: 12:12
 */
include_once 'User.php';
include_once 'product.php';
include_once 'productsettle.php';

$number=10;
$book= new bookline("gozila");
$user= new normaluser("TOM");
$price=productsettle::finalprice($user,$book,$number);
$str="hello,user:".$user->getname()."<br>";
$str.="your level:".$user->getgrade()."<br>";
$str.="your discount:".$user->getdiscount()."<br>";
$str.="you have bought:$number books".$book->getproductname();
$str.="the price is $price";
echo $str;
?>
