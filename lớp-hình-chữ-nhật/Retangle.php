<?php


class Retangle
{
    public $width;
    public $height;

    public function __construct($width,$height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->height * $this->width;
    }

    public function getPerimer()
    {
        return ($this->width + $this->height) * 2;
    }

    public function ve()
    {
        for ($i = 0; $i < $this->width;$i++){
        for ($j = 0; $j < $this->height;$j++){
           echo "*";
        }echo "<br>";
        }
    }
}