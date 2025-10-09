<?php
class VisTest{
    public $one = "Public";
    private $two = "Private";
    protected $three = "Protected";

    function __construct(){
        echo $this->one."<br>";
        echo $this->two."<br>";
        echo $this->three."<br>";
    }

    public function change($two2, $three2){
        $this->two = $two2;
        $this->three = $three2;
        echo $this->one."<br>";
        echo $this->two."<br>";
        echo $this->three."<br>";
    }
}
$vtest = new VisTest();
$vtest->one = "YOOOLOOOO!!!!";
echo $vtest->one."<br>";

$vtest->change("im still Private!!", "three is my name 222");