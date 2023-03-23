<h1>11Oop.php</h1>
<?php 
class User{
    // Properties are attributes that belongs to a class;
    public $name;
    public $email;
    // Methods
    function setName($name){
        $this->name = $name;
    }
    function getName(){
        return $this->name;
    }
}

// instentiate a user object
$user1 = new User();
$user1->setName('Ram');
echo $user1->getName() . "<br>";
// user 2
$user2 = new User();
$user2->setName('Shyam');
echo $user2->getName() . "<br>";
?>

<!-- Constructor begins -->
<h1>Constructor in php</h1>
<p>A constructor allows you to initialize an object's properties upon creation of the object.</p>
<?php
class Employee{
    public $name;
    public $age;
    function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
    function getData(){
        return $this->name . $this->age;
    }
}
// <!-- initialize it -->
$Emp1 = new Employee('Sohan Lal',' 23');
echo $Emp1->getData();
?>