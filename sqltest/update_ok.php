<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2016/1/6
 * Time: 11:44
 */
include("conn.php");
if(isset($_POST['id']) and isset($_POST['submit'] and $_POST['submit']=='save')){
    $update=mysql_query("update users set username='".$_POST['username']."'")
}