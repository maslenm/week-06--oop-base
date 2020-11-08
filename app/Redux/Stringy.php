<?php

declare(strict_types=1);

namespace App\Redux;

/* 
Create a class, Stringy in the App\Redux namespace, that performs a series of transformations on a string. You can use the get() method to get the final result.

Uncomment line 18 of app/Challenges.php to run the following code:

$string1 = new Stringy("Oop");
dump($string1->lower()->repeat(2)->get()); // "oopoop"

$string2 = new Stringy("Spoon");
dump($string2->repeat(2)->upper()->append("!")->get()); // "SPOONSPOON!"

$string3 = new Stringy("Na");
dump($string3->repeat(2)->append(" ")->repeat(8)->append("Batman!")->get()); // "NaNa NaNa NaNa NaNa NaNa NaNa NaNa NaNa Batman!" 
*/

class Stringy 
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }


    public function lower()
    {
        $this->string =strtolower($this->string);
        return $this;
    }

    
    public function upper()
    {
        $this->string = strtoupper($this->string);
        return $this;
    }

    
    public function append($string)
    {
        $this->string .= $string;
        return $this;
    }

    
    public function repeat($n)
    {
        $result = "";

        for ($i = 0; $i < $n; $i += 1) { 
            $result .= $this->string;
        }
        $this->string = $result;
        return $this;
    }


    public function get()
    {
        return $this->string;
    }

};