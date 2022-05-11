<?php

/*
* overriding means replace the value to the property or functionality 
of the method of base class.
 */
class Over_parent{
    public $a = "base class.";
    public function calculation($x,$y){
        echo "result of multiplication". $x*$y;
    }
}

class Over_child extends Over_parent{
    public $a = "child class.";
    public function calculation($x,$y){
        echo "result of sum". $x+$y;
    }
}

# property overriding
// $obj = new Over_child();
// echo $obj->a."<br>";

# method overriding
$obj = new Over_child();
echo $obj->calculation(10,5);
