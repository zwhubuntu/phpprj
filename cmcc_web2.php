<?php
$USER="aaaaaaaaa";//此处隐藏的复杂字符串，由大小写字母和符号构成
$PASS="bbbbbbbbb";//此处隐藏的复杂字符串，由大小写字母和符号构成

if(isset($_POST['login']))
{
    $user = addslashes($_POST['username']);

    if(strlen($user)>50)
        die("用户名长度不能超过50个字符");

    #$user='a%3a2%3a%7bs%3a4%3a%22user%22%3bb%3a1%3bs%3a4%3a%22pass%22%3bb%3a1%3b%7d';
    $user=urldecode($user);
    $user_arr=unserialize($user);
    var_dump($user_arr);
    $pass = addslashes($_POST['password']);
    $adminpass="!1793422703!";
    if($pass==$adminpass){die("请勿攻击admin账户!");}

    if(md5($pass)==md5($adminpass)){

        if($user_arr['user']==$USER && $user_arr['pass']==$PASS)
            echo "Well done, the key:".$KEY;//KEY隐藏了
        else
            die("用户名错误");
    }else{
        die("密码错误!");
    }
}
#username=a:2:{s:4:%2522user%2522;b:1;s:4:%2522pass%2522;b:1;}&password=s214587387a&login=Login
?>