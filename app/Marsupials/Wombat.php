<?php

declare(strict_types=1);

namespace App\Marsupials;

/* 
Create a class that represents a Wombat in the App\Marsupials namespace

You should be able to give the wombat a name when you create it.
The wombat should have a getName() method that returns its name
The wombat should have a sayHelloTo($wombat) method that you pass another wombat to and it will return a greeting
The wombat should have a giveHug() method and a howManyHugs() method. howManyHugs() should return the number of hugs the wombat has been given
Uncomment line 17 of app/Challenges.php to run the following code:

$tish = new Wombat("Tish");
$fonny = new Wombat("Fonny");

$tishName = $tish->getName();
dump($tishName); // "Tish"

$greeting = $tish->sayHelloTo($fonny);
dump($greeting); // "Hello Fonny"

$tish->giveHug();
dump($tish->howManyHugs()); // 1

$fonny->giveHug()->giveHug()->giveHug();
dump($fonny->howManyHugs()); // 3 
*/


class Wombat 
{
    // Properties
    private $name;
    private $hugs = 0; // use default value of 0 to hold a count

    // construct method, holding 1 parameter to be passed in on creation of new object instance
    public function __construct(string $name)
    {   // we need to store the value of the name property on thenewly created object instances
        $this->name = $name; 
    }
    // method to get the name property of a new object instance
    public function getName()
    {
        return $this->name;
    }
    // method to make one Wombat say hello to another by passing the target $wombat to sayHelloTo(____)
    public function sayHelloTo($wombat)
    {   // concatenating Hello with the name property of the wombat we are targeting 
        return "Hello " . $wombat->name;
    }
    // method to give a hug
    public function giveHug()
    {   // increments 1 hug on each use to the total number of hugs held in the property - 'hugs'
        $this->hugs += 1;
        return $this; // use return $this to allow for chaining of hugs using giveHug method
    }
    // method to display how many hugs have been received in total by returning the hugs property
    public function howManyHugs()
    {
        return $this->hugs;
    }
};