<?php
class Circle
{
    // Declare  properties
    public $radius = 0;

    function __construct( $par1 ) {
   $this->radius = $par1;
   
}
    
    // Method to get the perimeter
    public function getPerimeter(){
        return (4 * 3.14* $this->radius);
    }
    
    // Method to get the area
    public function getArea(){
        return (3.14* $this->radius * $this->radius);
    }
}
?>