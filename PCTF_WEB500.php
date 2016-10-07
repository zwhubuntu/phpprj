<?php
$id='0e00';
$a='1112 is a nice lab!';
$b='\x004\x00abcd';
if(stripos($a,'.'))
{
    echo 'Hahahahahaha';
    return ;
}
$data = file_get_contents($a,'r');
echo $data;
if(#$data=="1112 is a nice lab!" and
    $id==0 and strlen($b)>5 and eregi("111".substr($b,0,1),"1114")
    and substr($b,0,1)!=4)
{
   echo "ok!";
}
else
{
    print "work harder!harder!harder!";
}
?>