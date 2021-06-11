<?php



class Circle extends Shape
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;

    }
    public function calculatedArea(){
        return pi()*pow($this->radius,2);
    }
    public function calculatedPerimeter(){
        return pi()*$this->radius*2;
    }
}