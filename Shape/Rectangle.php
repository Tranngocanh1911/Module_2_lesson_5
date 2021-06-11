<?php


class Rectangle extends Shape
{
public $width;
public $height;

    public function __construct($name,$width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }
public function calculatedArea()
{
        return $this->width*$this->height;
}
    public function calculatedPerimeter()
    {
        return ($this->height + $this->width) * 2;
    }
}