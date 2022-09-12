<?php

use function PHPSTORM_META\map;

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
//Arrays
    $names = ['moataz','ablorhman','almashkli']; 
    print_r($names);
    echo BR;
    echo $names[0];
    //add to arr
    echo BR;
    $names[] = "Ahmad";
    print_r($names);
    //edit in arr
    echo BR;
    $names[0] = "mahde";
    print_r($names);
    //delete from arr
    echo BR;
    unset($names[3]);
    print_r($names);
    //Associative Arrays
        $pers = [
            [
                'name' => 'moataz',
                'age' => 27,
                'address' => 'makkh',
                'sik' => [
                    'HTML',
                    'CSS',
                    'js',
                    'SQL',
                    'PHP',
                    'Laravel'
                    ]
                ],
                [
                    'name' => 'mahde',
                    'age' => 19,
                    'address' => 'makkh',
                    'sik' => [
                    'electrical engineering',
                    'Car mechanics',
                    ]
                ]
        ];
        echo BR.$pers[0]['name'].BR;
        echo BR.$pers[0]['age'].BR;
        echo BR.$pers[0]['address'].BR;
        echo BR.print_r($pers[0]['sik']).BR;
    //Traversing arrays using loops
    //By for 
        $count = count($pers);
        for ($i=0; $i < $count; $i++) { 
            # code...
            echo BR. $pers[$i]['name'] .'-'. $pers[$i]['age'] .BR;
        }
    //By while
        $a = $count-1 ;
        while ($a >= 0) {
            # code...
            echo BR. $pers[$a]['name'] .'-'. $pers[$a]['age'] .BR;
            $a--;

        }
    //foreach
        foreach ($pers as $per) {
            # code...
            echo BR. $per['name'] .'-'. $per['age'] .BR;
        }
        //
        foreach ($pers as $key => $per) {
            # code...
            echo BR.$key.BR . $per['name'] .'-'. $per['age'] .BR;
        }
    //fun arr
        $arr = ['moataz','abdolrhman','ebrahim'];
        //count
        echo count($arr).BR;
        //is_array
        echo is_array($arr).BR;        
        //explode
        $insults = 'insult1 insult2 insult3';
        BR.print_r(explode(' ',$insults)).BR;
        //implode
        echo BR;
        echo implode('-',$arr) .BR;
        //array_merge
        $arr1 = [1,2,3];
        $arr2 = [4,5,6];
        $marge = array_merge($arr1,$arr2);
        print_r($marge); 
//functions
        //fun
            echo BR;
            function foo()
            {
                # code...
                echo "HI FUN IN PHP LANG";
            }
            echo BR;
            foo();

            function print_num(){
                $a = 0;
                while ($a <= 10) {
                    # code...
                    echo $a++;
                }
                function print_char(){
                    echo 'ABCD';
                }
            }
            echo BR;
            print_num();
            echo BR;
            print_char();
        //Parameters
        echo BR;
            function print_name($name){
                echo "my name is {$name}";
            }
            print_name('moataz');
        echo BR;
            function is_ood($num_ood){
                if($num_ood % 2)
                    echo $num_ood;
                else
                    echo 'your number not ood';
            }
            is_ood(3);   
        echo BR;
            function sum($num1,$num2){ 
                echo $num1 + $num2;
            };
            sum(5,5);
        //arguments
        echo BR;
            function sumByArguments(...$numbers)
            {
                # code...
                //print_r($numbers);
                $acc = 0;
                foreach($numbers as $num) $acc += $num;
                echo $acc; 
            }
            $numArr = [1,2,3,4,5,6,7,8,9,10]; 
            sumByArguments(...$numArr).BR;
        //return 
        echo BR;
            function is_ood_by_bool($num){

                if($num % 2) return true;
                
                return false;
            }
            echo BR.  is_ood_by_bool(1)  .BR;
        //Closure Functions
        echo BR;
            $hello = function(){
                echo 'hi Closure Functions';
            };
            BR. $hello() .BR;
            //exsamlpe Clo fun
            $fun = function($val){
                return $val * 2;
            };

            print_r(
                array_map($fun,$numArr)
            );
        //Arrow Function (PHP >= 7.4) 
        echo BR;
            $afun = fn($num) => $num * 2;
            BR.
            print_r(
                array_map($afun,$numArr)
            )
            .BR;
        //String functions
        echo BR;
                $str = "Esse eiusmod ut aliqua occaecat laboris labore magna culpa eu ex aliqua nostrud id labore. Voluptate consectetur ea
                exercitation aliquip veniam est ex deserunt id sunt est dolor. Commodo enim mollit officia culpa deserunt aute dolore
                aliqua laborum quis culpa sint.Minim nostrud anim et culpa ut irure fugiat aliqua aliqua commodo officia. Dolor est et
                sunt sit labore magna anim mollit. Pariatur quis duis proident tempor eu.";
                //tests fun str
                echo BR;
                echo strlen($str);
                echo BR;
                echo strtolower($str);
                echo BR;
                echo strtoupper($str);
                echo BR;
                echo strpos($str,"p");
                echo BR;
                echo str_replace('aliqua',' PHP ',$str);
                echo BR;
                echo substr($str,0,15);
                echo BR;
                