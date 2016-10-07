<?php
/**
 * Created by PhpStorm.
 * User: wenhuizone
 * Date: 2015/12/1
 * Time: 11:59
 */
Interface product{
    public function getproductname();
    public function getproductprice();
}
interface book extends product{
    public function getauthor();
}
class bookline implements book{
    private $productname;
    private $productprice;
    private $author;
    public function __construct($bookname){
        $this->productname=$bookname;
    }
    public function  getproductname(){
        return $this->productname;
    }
    public function  getproductprice(){
        return $this->productprice;
    }
    public function  getauthor(){
        return $this->author;
    }
}
?>