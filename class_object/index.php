<?php
/*
Class => is the collection of common caracteristics of something that belongs to real world. for example
if i create a class named car then it will hold the common thing that a car have like number of wheel, color, size etc.

Object=> is the collection of caracteristics of a carticulat thing that is inside that class. For example if car class have an 
method of "Honda" then it will discribe the functionality or behaviour of honda car. 
*object can only use those properties or methods that are define in the class. 
*/

class calculation{
    # properties of a class
    public $a, $b, $c;

    #method
    public function __construct($a,$b)  # a magic method of php
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    public function sub(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
}

$obj = new calculation(3,2);
echo "result of sum: ".$obj->sum();
echo "<br>";
echo "result of sub: ".$obj->sub();
