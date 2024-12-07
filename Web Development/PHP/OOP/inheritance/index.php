<?php
echo "<p>In object-oriented programming (OOP), inheritance is a mechanism where a class (called the child or subclass) inherits the properties and methods of another class (called the parent or superclass). This allows for code reuse and helps in creating hierarchical relationships between classes.</p>";


class ParentClass {
    public $property = "I am a parent property";

    public function parentMethod() {
        echo "This is a parent method.";
    }
}

class ChildClass extends ParentClass {
    public function childMethod() {
        echo "This is a child method.";
    }
}

// Create an object of the child class
$child = new ChildClass();
echo $child->property;        // Access inherited property
$child->parentMethod();       // Call inherited method
$child->childMethod();        // Call child-specific method



?>