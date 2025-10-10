<?php
class Magic{
    private $data = "WOOP!";

    public function __set($name, $value){
        echo "setting $name to $value";
        $this->$name = $value;
    }

    public function __get($name){
        echo "getting $name";
        return $this->$name;
    }
}

$tOBJ = new Magic();
$tOBJ->data = "dumb ass......!";
echo $tOBJ->data;

$tOBJ->hidden = "OMG WTF!";
echo $tOBJ->hidden;
