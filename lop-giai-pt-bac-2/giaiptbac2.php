<?php


class giaiptbac2
{
    public $a;
    public $b;
    public $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function delta()
    {
        return pow($this->b, 2) - 4 * ($this->a * $this->c);
    }

    public function giai()
    {
        if ($this->delta() < 0) {
            echo "pt vo nghiem";
        } else if ($this->delta() == 0) {
            echo "phuong trinh co nghiem kep :" . " x<sub>1</sub>" . "=x<sub>2</sub>" . " = " . (-$this->b + sqrt(($this->b * $this->b) - 4 * $this->a * $this->c)) / 2 * $this->a;
        } else {
            echo "x<sub>1</sub> =" . (-$this->b + sqrt(($this->b * $this->b) - 4 * $this->a * $this->c)) / 2 * $this->a;
            echo "x<sub>2</sub> =" . (-$this->b - sqrt(($this->b * $this->b) - 4 * $this->a * $this->c)) / 2 * $this->a;
        }
    }
}