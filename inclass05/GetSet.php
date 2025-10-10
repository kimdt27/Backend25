<?php
class GetSet
{
    private $fullname;
    private $age;

    public function getFullName()
    {
        return $this->fullname;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function setFullName($fullname){
        $this->fullname = htmlspecialchars($fullname);
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function echoNameAge(){
        echo $this->fullname;
        echo "<br>";
        echo $this->age;
    }
}

$testOBJ = new GetSet();
var_dump($testOBJ);
$testOBJ->setFullName("<script>alert('Kim T')</script>");
$testOBJ->setAge(40);
$testOBJ->echoNameAge();

echo $testOBJ->getFullName();