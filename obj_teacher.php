<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2015/11/30
 * Time: 12:05
 */
class teacher{
    public function  getname(){
        return $this->name;
    }
    public function  setname($name){
        $this->name=$name;
    }
    public  function  getsex(){
        return $this->sex;
    }
    public function  setsex($sex){
        $this->sex=$sex;
    }
    public function getage(){
        if ($this->age<18||$this->age>100){
            return 24;
        }
        else{
            $this->age=$age;
        }
    }
    public function  setage($age){
        $this->age=$age;
    }
}

$p1=new teacher();
$p1->setname("wangfeifei");
$p1->setsex("male");
$p1->getage(10);

echo $p1->getname()."<br/>";
echo $p1->getsex()."<br/>";
echo $p1->getage()."<br/>";
?>