<?php

/*- Exercici 1
Seguint l’exercici anterior, imagina com ampliaries l’estructura que has creat per representar 
un Cercle i el seu corresponent càlcul d’àrea.*/

Interface Figure {

    public function areaCalc();
    
}

class Shape {

    public $width;
    public $height;

    public function __construct($width, $height) {
        
        $this->height = $height;
        $this->width = $width;
        
    }
}

class Triangle extends Shape implements Figure {

    public function areaCalc () {

        $triangleArea = 0.5*($this->height*$this->width);
        echo "Triangle Area is: ".$triangleArea;
        echo '<br>';

    }

}

class Rectangle extends Shape implements Figure {

    public function areaCalc () {

        $rectangleArea = ($this->height*$this->width);
        echo "Rectangle Area is: ".$rectangleArea;
        echo '<br>';

    }

}

class Circle implements Figure {
    
    public $diameter;

    public function __construct($diameter) {
        
        $this->diameter = $diameter;

    }

    public function areaCalc () {

        $radius = $this->diameter/2;
        $squaredRadius = ($radius*$radius);
        $circleArea = ($squaredRadius*3.14);
        echo "Circle Area is: ".$circleArea;
        echo '<br>';
    }
}

$triangle = new Triangle(10, 20);
$rectangle = new Rectangle(10, 20);
$circle = new Circle(10);

$triangle->areaCalc(); 
$rectangle->areaCalc();
$circle->areaCalc();

?>