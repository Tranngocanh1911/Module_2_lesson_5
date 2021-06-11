<?php



class Cylinder extends Circle
{
    public $height;

    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function calculatedArea()
    {
        return parent::calculatedArea() * 2 + parent::calculatedPerimeter() * $this->height;
    }
    public function calculatedVolume(){
        return parent::calculatedArea() * $this->height;
    }
}