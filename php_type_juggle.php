<?php
$USER = "admin";
$PASSWORD_SHA256="something";
$FLAG ='wahaha';

$x =$_POST["auth"];


$auth = json_decode($x,true);
var_dump($auth);
echo $auth['data']['login'];
echo $auth['data']['password'];

if($auth['data']['login'] == $USER && !strcmp($auth['data']['password'], $PASSWORD_SHA256))
    $return['status'] = "Access granted! The validation password is: $FLAG";
else
    $return['status'] = 'Authentication failed!';

print json_encode($return);

?>
