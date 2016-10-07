<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2016/4/28
 * Time: 21:22
 */
$sum=0;
for($i=0;$i<1000000000;$i++){
    if($i%3==0||$i%5==0){
        $sum=$sum+$i;
    }
}
echo $sum;
$num = number_format($sum);//后面三个参数为空
echo $num;
?>