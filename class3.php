<?php
class Triangle
{
    // Declare  properties
    public $base = 0;
    public $height = 0;

    function __construct( $par1, $par2 ) {
   $this->base = $par1;
   $this->height= $par2;
   
}
    
    
    // Method to get the area
    public function area(){
        return ((1/2) * $this->base * $this->height);
    }
}
?>