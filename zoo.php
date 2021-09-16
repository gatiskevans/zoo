<?php

    require_once 'Interfaces/Animal.interface.php';
    require_once 'Interfaces/Caged.interface.php';
    require_once 'Interfaces/Outdoors.interface.php';
    require_once 'Classes/Dangerous.class.php';
    require_once 'Classes/Friendly.class.php';
    require_once 'Classes/Moody.class.php';
    require_once 'Classes/Park.class.php';

    $park = new Park();

    $animals = [
        new Dangerous('Lion'),
        new Dangerous('Crocodile'),
        new Friendly('Giraffe'),
        new Friendly('Sloth'),
        new Moody('Fox'),
        new Moody('Wolf')
    ];

    foreach($animals as $animal){
        $park->addAnimal($animal);
    }

    foreach($park->getAnimals() as $animal){
        if($animal instanceof Caged) echo $animal->livesInCage();
        if($animal instanceof Outdoors) echo $animal->livesOutdoors();
    }