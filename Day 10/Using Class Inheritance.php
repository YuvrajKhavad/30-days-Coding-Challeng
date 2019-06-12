<?php
class MyClass
{
    public $prop1 = "I'm a class property!";

    public static $count = 0;

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

    private function getPropert()
    {
        return $this->prop1 . "</br>";
    }

    public static function plusOne()
    {
        return "The count is ". ++self::$count." .<br />";
    }
}

// another class
class MyOtherClass extends MyClass
{
    public function __construct()
    {
        parent::__construct();
        echo "A new constructor in " . __CLASS__ . ".<br />";
    }
    public function newMethod()
    {
        echo "From a new method in " . __CLASS__ . ".<br />";
    }

    public function callProtected()
    {
        return $this->getPropert();
    }
}

do
{
    echo MyClass::plusOne();
}
while (MyClass::$count < 10);
// Create a new object
$newobj = new MyOtherClass;

//echo $newobj->callProtected(); 
?>