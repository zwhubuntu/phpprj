<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2015/12/1
 * Time: 12:08
 */
include_once 'User.php';
include_once 'product.php';
class productsettle{
    public static function  finalprice(User $_user,product $_product,$number=1){
        $price=$_user->getDiscount()*$_product->getproductprice()*$number;
        return $price;
    }
}
?>
