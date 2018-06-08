<?php
// Include class definition
require "class2.php";
require "class1.php";
require "class3.php";
require "class4.php";
require "class5.php";

 $obj1 = new Square(10);
 
echo "Square class : ";
echo "<br>";
echo 'Side: '. $obj1->side; 
echo "<br>";
echo 'Perimeter: '.$obj1->getPerimeter(); 
echo "<br>";
echo'Area: '. $obj1->getArea(); 

 $obj2 = new Rectangle(10,10);
 
echo "<br><br>Rectangle class : ";
echo "<br>";
echo 'Length: '.$obj2->length; 
echo "<br>";
echo 'Width: '.$obj2->width; 
echo "<br>";
echo 'Perimeter: '.$obj2->getPerimeter(); 
echo "<br>";
echo 'Area: '. $obj2->getArea(); 

$obj3 = new Triangle(4,8);

echo "<br><br> Right angle triangle class : ";
echo "<br>";

echo 'Base: '.$obj3->base;
echo "<br>";
echo 'Height: '.$obj3->height;
echo "<br>";
echo 'Area: '. $obj3->area();

$obj4 = new Circle(4);
 
echo "<br><br>Circle class : ";
echo "<br>";
echo 'Radius: '.$obj4->radius; 
echo "<br>";
echo 'Perimeter: '.$obj4->getPerimeter(); 
echo "<br>";
echo 'Area: '. $obj4->getArea(); 


$obj = new person;

$obj->set_name("Aditi");

$obj->set_age(21);
echo "<br><br> Thank You ";
echo "<br> My name : ";
echo $obj->get_name();
echo "<br> Age : ";
echo $obj->get_age();

?>


