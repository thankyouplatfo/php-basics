<?php
const BR = '<br>';
//Print
    echo 'Hello World' .BR;
//Data Types
    // String
    $name = 'Hsoub' .BR;
    // Number
    $age = 27;
    $pi = 3.14;
    //Blooleans (true false)
    $rainy = true; //Or false
    //Null
    $empty = null;
    $name = null;

    echo "Hello,  $name " .BR;
//Convert between genres
    echo gettype(123) .BR;
    //true and false
    echo true .BR;
    //Casting
    $var = 120  .BR;
    echo gettype( (string) $var ) .BR;
    echo (int) false .BR;
    echo (bool) 500  .BR;
//Constants
    const MAX_VALUE = 100;
    
    echo MAX_VALUE .BR;
//Operators
    $a = 4;
    $b = 2;
    echo $a + $b .BR;
    echo $a - $b .BR;
    echo $a * $b .BR;
    echo $a / $b .BR;
    echo $a ** $b .BR;
    echo $a % $b .BR;
    echo ++$a .BR;
//Comparison
    $a = 1;
    $b = 0;
    $c = '1';
    $d = 0;
    echo $a == $b .BR;
    echo $c === $d.BR;
    echo $a != $b .BR;
    echo $a !== $b .BR;
    echo $a > $b .BR;
    echo $a <=> $b .BR;
//conditional sentences
    $a = 4;
    $b = 2;
    if ($a > $b) {
        # code...
        echo "<br>"."$a bigger theme $b"."<br>";
    }

    if ($a < $b) {
        # code...
        echo "<br>"."$a < $b"."<br>"; 
    } else {
        # code...
        echo "<br>"."$a > $b"."<br>";
    }
    //ifelse
    if ($a < $b) {
        # code...
        echo "<br>"."$a < $b"."<br>"; 
    } else if($a > $b) {
        # code...
        echo "<br>"."$a > $b"."<br>";
    }
    //switch
    $i = 5;

    switch ($i) {
        case 1:
            # code...
            echo 1;
            break;
        case 2:
            # code...
            echo 2;
            break;
        case 3:
            # code...
            echo 3;
            break;
        case 4:
            # code...
            echo 4;
            break;
        case 5:
            # code...
            echo "<br>" . 5 . "<br>";
            break;
        
        default:
            # code...
            echo 'None of the above';
            break;
    }
    // Ternary Operator
    echo $a > $b ? "<br>"."OK"."<br>" : "<br>"."KO"."<br>";
    //isset
    echo "<br>".isset($a)."<br>";
        //define
        echo defined("MAX_VALUE") ? 'OK' : 'KO';
    //Null Coalescing Operator
    //$username = 'Moataz';
    $age = 27;
    echo  $username ??  "<br>" . $age . "<br>" ?? "<br>" . 'nobody';
