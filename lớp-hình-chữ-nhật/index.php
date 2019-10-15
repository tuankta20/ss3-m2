<?php
include "Retangle.php";
$retangle = new Retangle(5, 5);
echo "dien tich: " . $retangle->getArea();
echo "<br >";
echo "chuvi : " . $retangle->getPerimer();
echo "<br>";
echo $retangle->ve();