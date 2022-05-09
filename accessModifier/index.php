<?php
/*
* three type of access modifire. public, private, protected.
* public properties can be access from any where in the program. 
* protected properties can not access directly outsie of the class. 
  only accessable from the base class and child class.
* private properties are only accessable from the base or owner class.
*/

# public


// class Employee{
//     public $name;
//     public $age;
//     public $salary;

//     public function __construct($name,$age,$salary)
//     {
//         $this->name = $name;
//         $this->age = $age;
//         $this->salary = $salary;
//     }
//     public function info(){
//         echo"<h2>Employee profile</h2>"."<br>";
//         echo"Employee Name:".$this->name."<br>";
//         echo"Employee Age: ".$this->age."<br>";
//         echo"Employee Salary: ".$this->salary;
//     }
// }

// $employee = new Employee("Avi",23,10000);
// $employee->info();

# portected

// class Employee{
//     protected $name;
//     protected $age;
//     protected $salary;

//     public function __construct($name,$age,$salary)
//     {
//         $this->name = $name;
//         $this->age = $age;
//         $this->salary = $salary;
//     }

//     # can not access this class through the object of this class.
//     protected function info(){
//         echo"<h2>Employee profile</h2>"."<br>";
//         echo"Employee Name:".$this->name."<br>";
//         echo"Employee Age: ".$this->age."<br>";
//         echo"Employee Salary: ".$this->salary;
//     }
// }
// class Data extends Employee{
//     public function info(){
//         echo"<h2>Employee profile</h2>"."<br>";
//         echo"Employee Name:".$this->name."<br>";
//         echo"Employee Age: ".$this->age."<br>";
//         echo"Employee Salary: ".$this->salary;
//     }
// }
// $data = new Data("Avi",23,10000);
// $data->info();

#protected
class Employee{
    private $name;
    private $age;
    private $salary;

    public function __construct($name,$age,$salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary; 
    }
    public function info(){
        echo"<h2>Employee profile</h2>"."<br>";
        echo"Employee Name:".$this->name."<br>";
        echo"Employee Age: ".$this->age."<br>";
        echo"Employee Salary: ".$this->salary;
    }
}

$data = new Employee("Avi",23,10000);
$data->info();

#protected example 2
// class Employee{
//     private $name;
//     private $age;
//     private $salary;

//     public function __construct($name,$age,$salary)
//     {
//         $this->name = $name;
//         $this->age = $age;
//         $this->salary = $salary;
//     }
//     public function info(){
//         echo"<h2>Employee profile</h2>"."<br>";
//         echo"Employee Name:".$this->name."<br>";
//         echo"Employee Age: ".$this->age."<br>";
//         echo"Employee Salary: ".$this->salary;
//     }
// }
// class Data extends Employee{
//     public function info(){
//         echo"<h2>Employee profile</h2>"."<br>";
//         echo"Employee Name:".$this->name."<br>";
//         echo"Employee Age: ".$this->age."<br>";
//         echo"Employee Salary: ".$this->salary;
//     }
// }
// $data = new Data("Avi",23,10000);
// $data->name = "Avindra";
// $data->age = 23;
// $data->salary = 10000;
// $data->info();
// # question: how the private properties are accessing from the derive class?
?>