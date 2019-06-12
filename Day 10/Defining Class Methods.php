<?php
class MyClass
{
    public $prop1 = "I'm a class property!";

    public function setProperty($newval)
    {
        $this->prop1 = $newval;
    }

    public function getPropert()
    {
        return $this->prop1 . "</br>";
    }
}

$obj = new MyClass;
$obj1 =  new MyClass;

// get value of property from both objects
echo $obj->getPropert();
echo $obj1->getPropert();

$obj->setProperty("I'm a new property value!"); // set new data
$obj1->setProperty("I belong to the second instance!");

echo $obj->getPropert();
echo $obj1->getPropert();
?>