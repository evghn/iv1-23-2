<?php
    require __DIR__ . "/autoload.php";



// world class
// ****************************** 
// world object

// var_dump(new A()); die;

// $cat = new Pet(color: 'black', nickname:'Murzik',age:2, sex:'male');

$bear = new Animal([
    'color' => 'black',   
    'age' => 2,
    'sex' => 'male',
    'likeFoods' => [
        'milk',
        'meat',
        'fish',
        'berries',
    ]
]);
var_dump($bear); 


$cat = new Pet([
    'color' => 'black',
    'nickname' => 'Murzik',
    'age' => 2,
    'sex' => 'male',
    'likeFoods' => [
        'milk',
        'meat',
        'fish',
        'chicken',
        'mouse',
    ]
]);

echo $cat->getCount();

echo $cat->say('мяу-мяу');
echo $cat->run();

echo $cat->getInfo();


$dog = new Pet([
    'color' => 'white',
    'nickname' => 'Tuzik',
    'age' => 3,
    'sex' => 'male',
    'likeFoods' => [
        'meat',
        'fish',
        'bones',
        'chappi'
    ]
]);
echo $dog->say('гав-гав');
echo $dog->run();
// var_dump($cat, $dog);
echo $cat->getStatusHungry();
/**
 * $milk = new Food('milk');
 * $fish = new Food('fish');
 * $cat->toEat([$milk, $fish]);
 * 
 */

$cat->toEat(
    array_map(
        fn ($val) => new Food($val),
        ['milk', 'fish']
    )
);


$dog->toEat('meat');
echo $cat->getStatusHungry();

echo $cat->run();
echo $dog->run();




echo $dog->getCount();
echo $bear->getCount();

$turtle = new Pet([
    'color' => 'white',
    'nickname' => 'Turtilla',
    'age' => 3,
    'sex' => 'male',
    'likeFoods' => [
        'meat',
        'fish', 
    
    ]
]);

echo $turtle->getCount();

var_dump(Animal::IS_OWNER);
var_dump($bear::IS_OWNER);
var_dump(Pet::IS_OWNER);
