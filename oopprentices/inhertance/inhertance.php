<?php

    class employee{
        public $name;
        public $age;
        public $salary;

        function __construct($n, $a, $s){
            $this->name = $n;
            $this->age = $a;
            $this->salary = $s;
        }

        function info(){
            echo "<h3>Employee Profile</h3>";
            echo "Employee Name : ". $this->name . "<br>";
            echo "Employee Age : ". $this->age . "<br>";
            echo "Employee Salary : ". $this->salary . "<br>";
        }
    }
 $e1 = new employee ("Ram", 25, 2000);
 $e1->info();
?>