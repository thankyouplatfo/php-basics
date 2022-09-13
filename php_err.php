<?php
    class Br{
        private $br;
        //
        public function __construct($br)
        {
            $this->br = $br;
        }
        //
        public function setBr($br)
        {
            # code...
            if (is_string($br)) return $this->br;
            else throw new Exception('Not String');
        }
        //
        public function getBr(){
            echo $this->br;
        }
    }
    //Err And Excption
    $br = new Br("<br>");
    echo $br->getBr();
    //
    //echo undefinedFunction();
    //echo $Err;
    echo "Lorem ipsom";
    //
    function dividing($a,$b){
        if ($b == 0) throw new Exception("غير مسموع لك القسمة على صفر "); 
        return $a / $b;
    }
    //
    try {
        echo $br->getBr();
        echo dividing(4,0);

    } catch (Exception $e) {
        echo $e->getMessage();
    }