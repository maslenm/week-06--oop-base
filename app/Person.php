<?php

declare(strict_types=1);

namespace App;


class Person 
{
    private $firstName;
    private $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
   
    public function getFullName() : string
    {
        return "{$this->firstName} {$this->lastName}"; 
    }

    public function sayHelloTo(Person $person) : string
    {
        return "Hello " . $person->getFullName();
    }
};