<?php
$_CONFIG['Security']=true;

foreach(array('_GET','_POST','_REQUEST','_COOKIE') as $method)
{
    foreach($$method as $key=>$value)
	{ unset($$key); } 
}
 
function clear($string)
{ 
  $string = addslashes($string); 
  $string = preg_replace("/(and|or|union|select|from|\s)/i", "", $string); 
  return $string;
 }

 $username = isset($_POST['username']) ? clear($_POST['username']) : die('Please enter in a username.');
 $password = isset($_POST['password']) ? clear($_POST['password']) : die('Please enter in a password.');

if($_CONFIG['Security'])
{ 
 $username=preg_replace('#[^a-z0-9_-]#i','',$username);
 $password=preg_replace('#[^a-z0-9_-]#i','',$password);
 } 

if (is_array($username))
{ 
 foreach ($username as $key => $value) 
 { $username[$key] = $value; }
}

 $query='SELECT * FROM user1 WHERE user=\''.$username[0].'\' AND pwd=\''.$password.'\';'; 
  $result=mysql_query($query);
 echo $query;
 if($result && mysql_num_rows($result) > 0)
  { 
   echo('Sucess,key:........'); 
   exit();
  } 
  else {
      echo "wrong";
  }
 exit();
?>