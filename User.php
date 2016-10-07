<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2015/11/30
 * Time: 12:49
 */
interface User{
    function getname();
    function setname($name);
    function getDiscount();
}
abstract class AbstractUser implements \User{
    private $name="";
    protected  $discount=0;
    protected $grade="";

    public function  __construct($name){
        $this->setname($name);
    }
    public function getname(){
        return $this->name;
    }
    public function getdiscount(){
        return $this->discount;
    }
    public function setname($name){
         $this->name=$name;
    }
    public function  getgrade(){
        return $this->grade;
    }
}

class normaluser extends AbstractUser{
    protected $discount=1.0;
    protected $grade="normaluser";
}

class vipuser extends AbstractUser{
    protected $discount=0.8;
    protected $grade="vipuser";
}
class inneruser extends AbstractUser{
    protected $discount=0.7;
    protected $grade="inneruser";
}
?>