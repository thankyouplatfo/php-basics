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
        echo BR."$a bigger theme $b".BR;
    }

    if ($a < $b) {
        # code...
        echo BR."$a < $b".BR; 
    } else {
        # code...
        echo BR."$a > $b".BR;
    }
    //ifelse
    if ($a < $b) {
        # code...
        echo BR."$a < $b".BR; 
    } else if($a > $b) {
        # code...
        echo BR."$a > $b".BR;
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
            echo BR . 5 . BR;
            break;
        
        default:
            # code...
            echo 'None of the above';
            break;
    }
    // Ternary Operator
    echo $a > $b ? BR."OK".BR : BR."KO".BR;
    //isset
    echo BR.isset($a).BR;
        //define
        echo defined("MAX_VALUE") ? 'OK' : 'KO';
    //Null Coalescing Operator
    //$username = 'Moataz';
    $age = 27;
    echo  $username ??  BR . $age . BR ?? BR . 'nobody';
//loops
    //while و do...while
    $i = 1;
    while ($i <= 10)
        echo BR. $i++ .BR;  
    BR;
     $y = 11;
    do {
        # code...
        echo BR. $y++ .BR;
    } while ($y <= 10);
    //for
    for ($i=0; $i <= 10; $i++) { 
        # code...
        echo BR.$i.BR;
    }
        //EXSAMPLE
        for ($i=0 , $y=0 ;  $i <= 10 , $y <= 20 ; print $y++ .BR, $i++);
    //break and continue
        $i = 1;
        while ($i <= 10)
        {
            $i++;
            if ($i % 2) continue;
            echo BR.$i.BR;
        }