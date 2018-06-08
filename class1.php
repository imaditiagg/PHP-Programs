<?php
class Square
{
    // Declare  properties
    public $side = 0;

    function __construct( $par1 ) {
   $this->side = $par1;
   
}
    
    // Method to get the perimeter
    public function getPerimeter(){
        return (4 * $this->side);
    }
    
    // Method to get the area
    public function getArea(){
        return ($this->side * $this->side);
    }
}
?>

