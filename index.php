<?php
//Print
    echo 'Hello World' .'<br>';
//Data Types
    // String
    $name = 'Hsoub' .'<br>';
    // Number
    $age = 27;
    $pi = 3.14;
    //Blooleans (true false)
    $rainy = true; //Or false
    //Null
    $empty = null;
    $name = null;

    echo "Hello,  $name " .'<br>';
//Convert between genres
    echo gettype(123) .'<br>';
    //true and false
    echo true .'<br>';
    //Casting
    $var = 120  .'<br>';
    echo gettype( (string) $var ) .'<br>';
    echo (int) false .'<br>';
    echo (bool) 500  .'<br>';
//Constants
    const MAX_VALUE = 100;
    echo MAX_VALUE .'<br>';
//Operators
    $a = 4;
    $b = 2;
    echo $a + $b .'<br>';
    echo $a - $b .'<br>';
    echo $a * $b .'<br>';
    echo $a / $b .'<br>';
    echo $a ** $b .'<br>';
    echo $a % $b .'<br>';
    echo ++$a .'<br>';
//Comparison
    $a = 1;
    $b = 0;
    $c = '1';
    $d = 0;
    echo $a == $b .'<br>';
    echo $c === $d .'<br>';
    echo $a != $b .'<br>';
    echo $a !== $b .'<br>';
    echo $a > $b .'<br>';
    echo $a <=> $b .'<br>';
    