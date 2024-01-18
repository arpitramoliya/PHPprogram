<?php
// Define a class called "Person"
class Person {
    // Declare properties (attributes)
    public $name;
    public $age;

    // Constructor method
    public function __construct($name, $age) {
        // Initialize the object properties with values passed as arguments
        $this->name = $name;
        $this->age = $age;
    }

    // A method to display information about the person
    public function introduce() {
        echo "Hello, my name is {$this->name}, and I am {$this->age} years old.\n";
    }
}

// Create instances (objects) of the "Person" class
$person1 = new Person("John", 30);
$person2 = new Person("Alice", 25);

// Call the "introduce" method to display information about the persons
$person1->introduce();
$person2->introduce();

?>
