<?php 
/**
 *  This is a very bacic DocBlocks
 * 
 * @author Yuvraj Khavad <yuvraj.khavad@gmail.com>
 * @copyright 2010 Z Index Solutions
 */

 class Person
 {
    private $_name;
    private $_job;
    private $_age;
    
    public function __construct($name, $job, $age)
    {
        $this->_name = $name;
        $this->_job = $job;
        $this->_age = $age;
    }

    public function changeJob($newJob)
    {
        $this->_job = $newJob;
    }

    public function happyBirthday()
    {
        ++$this->_age;
    }
 }

$person1 = new Person ("Tom", "Button-Pusher", 34);
$person2 = new Person ("John", "Lever Puller", 41);

// Output their starting point
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";

// give tom a promotion and a birtday
$person1->changeJob("Box-Mover");
$person1->happyBirthday();

$person2->happyBirthday();

// Output the ending values
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";
?>