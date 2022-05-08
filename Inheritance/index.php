<?php

class Employee{
    public $name;
    public $age;
    public $salary;

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

# this class extends the base class. so it can excess the properties and methods of base class.
class Hr extends Employee{
    public $phone = 500;
    public $ta = 1000;
    public $totalSalary;

    public function hrInfo(){
        $this->totalSalary = $this->salary + $this->phone + $this->ta; 
        echo"<h2>HR profile</h2>"."<br>";
        echo"HR Name:".$this->name."<br>";
        echo"HR Age: ".$this->age."<br>";
        echo"HR Salary: ".$this->totalSalary;
    }

}
# calling base class
$employee = new Employee("Avindra",23,10000);
$employee->info();

# calling child class
$hr = new HR("HR",23,18500);
$hr->hrInfo();