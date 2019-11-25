<?php
class MyClass
{
    public $prop1 = "I'm a class property!";

    public function __construct()
    {
       // echo "The class "', __CLASS__ ,'" was initiated!";
        echo 'The class "', __CLASS__, '" was initiated!<br />';
    }

    public function __destruct()
    {
        echo 'The class "', __CLASS__, '" was destroyed.<br />';
    }

    public function __toString()
    {
        echo "Using the toString Method:";
        return $this->getPropert();
    }

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

// get value of property from both objects
echo $obj->getPropert();

echo $obj;

unset($obj);

echo "End of File. </br>";
?>