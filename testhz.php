<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2015/12/4
 * Time: 19:16
 */
$filename="1.php\x00.gif";
$dir="./uploads/";
preg_match('|\.(\w+)$|', $filename, $ext);
print_r($ext);
$strpathname=$dir.$filename;
$strPureName = "";
for($i=0; $i<strlen($strpathname); $i++){
    if(ord($strpathname[$i]) == 0){
        break;
    }
    $strPureName .= $strpathname[$i];
}
echo $strPureName."<br \>";
$info=pathinfo($strPureName);
var_dump($info);
?>