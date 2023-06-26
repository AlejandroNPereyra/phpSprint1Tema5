<?php

/*- Exercici 1
Necessitem crear un tipus de dades que representi un animal. 
Els animals tenen un nom, ara bé, no és el mateix el so de la “parla” d’un gos, que el d’un gat. 
Per tant, necessitem crear altres tipus de dades que ens ajudin a programar aquests comportaments. 
Bàsicament, volem un mètode makeSound() que mostri un missatge diferent si es tracta d’un gos 
(per exemple,“Bup, bup!”) o un gat (per exemple “Meu!”).*/

Interface Animal {

    public function makeSound();

}

class Dog implements Animal {

    public function makeSound () {
        
        echo "A dog barking sound like, Woof! Woof!";
        echo '<br>';

    } 

}

class Cat implements Animal {

    public function makeSound () {
        
        echo "Meow! Meow! That's the sound a cat does!";
        echo '<br>';

    } 

}

$animal1 = new Dog();
$animal2 = new Cat();

$animal1->makeSound();
$animal2->makeSound();

?>