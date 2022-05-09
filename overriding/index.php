<?php

/*
* overriding means replace the value to the property or functionality 
of the method of base class.
 */

class A{
    public $a = "base class";

    public function calculation($x,$y){
        echo "result of multiplication ". $x*$y;
    }
}

class B extends A{
    public $a = "child class";

    public function calculation($x,$y){
        echo "result of sum ". $x+$y;
    }
}

# property overriding
// $obj = new B();
// echo $obj->a;

# method overriding
$obj = new B();
$obj->calculation(10,5);