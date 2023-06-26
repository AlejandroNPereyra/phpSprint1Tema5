<?php

/*- Exercici 1
És el mateix exercici que a POO1, però aquí necessitem que ho resolguis aplicant algun dels 
conceptes del tema POO2.*/

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

$triangle1 = new Triangle(10, 20);
$rectangle1 = new Rectangle(10, 20);

$triangle1->areaCalc(); 
$rectangle1->areaCalc();   

?>