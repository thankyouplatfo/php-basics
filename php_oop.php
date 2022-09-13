<?php
//Classes
    class Underline{
        public $br;
        //
        function __construct($br)
        {
            $this->br = $br;
        }
        //
        public function br()
        {
            # code...
            echo $this->br;
        }
        //
        public function setBr($br)
        {
            # code...
            $this->br = $br;
        }
        public function getBr()
        {
            # code...
            return $this->br;
        }
    }
    //
    class Vehicle{
        // Attributes
        protected $model;
        protected $year;
        public static $CONTENT = 'Blablabla';
        //__construct
        function __construct($model,$year)
        {
            $this->model = $model;
            $this->year = $year;
        }
        //Methods
        public function setModel($model)
        {
            # code...
            $this->model = $model;
        }
        public function getModel()
        {
            # code...
            return $this->model;
        }
        public function setYear($year)
        {
            # code...
            if (is_int($year)) $this->year = $year;
            else throw new Exception('Invalid year!');
        }
        public function getYear()
        {
            # code...
            return $this->year;
        }
        //
        public function printInfo(){
            echo "{$this->model} - {$this->year}";
        }
        //
        public function start(){
            echo "{$this->model} Engine Starting";
        }
        
        public function stop(){
            echo "{$this->model} Engine Stop";
        }
        //
        public function showConstant(){
            echo self::$CONTENT;
        }

    }
    //Obj
    $vehicle = new Vehicle('BMW',2001);
    $underline = new Underline('<br><br>');
    $underline->br();
    $vehicle->start();
    $underline->br();
    //Encapsulation
    $vehicle->setModel('Honda');
    echo $vehicle->getModel();
    $underline = new Underline('<br>');
    $underline->setBr('<br>');
    echo $underline->getBr();
    echo $underline->getBr();
    echo "Exercitation veniam quis excepteur sint aliquip reprehenderit sunt. Voluptate Lorem duis incididunt Lorem. Exercitation
    officia sit et ad officia anim cillum duis duis. Duis occaecat reprehenderit minim occaecat eiusmod veniam eu laboris
    irure aliqua. Pariatur cillum ad nulla ipsum consequat culpa. Officia cupidatat laboris et do cillum commodo mollit amet
    voluptate laborum.Eiusmod est aliquip ut ut exercitation. Quis aliqua ex voluptate consectetur amet dolore est ipsum
    commodo do. Sunt exercitation elit do duis pariatur excepteur laboris sit qui et.";
    echo $underline->getBr();
    $vehicle->setModel('BMW');
    $vehicle->setYear(2001);
    echo $vehicle->getModel() .' '. $vehicle->getYear();
    //inheritance
    class Car extends Vehicle
    {
        private $color  ;
        //
        public function __construct($color,$model,$year)
        {
            parent::__construct($model,$year);
            $this->color  = $color ;

        }
        //
        public function printInfo(){
            parent::printInfo();
            echo " - {$this->color}";
        }
    }
    echo $underline->getBr();
    $car = new Car('BMW',2001,'royal black');
    echo $car->start();
    echo $underline->getBr();
    $vehicle->printInfo();
    echo $underline->getBr();
    //Overriding
    $car->printInfo();
    echo $underline->getBr();
    echo Vehicle::$CONTENT;
    echo $underline->getBr();
    echo $vehicle->showConstant();
    echo $underline->getBr();
    ///////////////////////////abstract class
    class Underline2{
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
            if(is_string($br)) return $this->br;
            else  throw new Exception("ليس نصا");
            
        }
        public function getBr(){
            echo $this->br;
        }
    }
    
        abstract class Shape
        {
            abstract function area();
        }
        //Interface
        interface ShapeInterface{
            public function per();
        }
        //
        class Square extends Shape implements ShapeInterface
        {
            private $length;
            //
            public function __construct($length)
            {
                $this->length = $length;       
            }
            //
            public function area()
            {
            return $this->length * $this->length;   
            }
            //
            public function per()
            {
              return $this->length * 4;
            }
        }
        //
        class Circle extends Shape{
            private $radius;
            //
            public function __construct($radius)
            {
                $this->radius = $radius;
            }
            //
            public function area()
            {
                return pi() * ($this->radius * $this->radius);
            }
            
        }
        //
        $un = new Underline2("<br>");
        //
        $sqrt = new Square(2);
        echo $sqrt->area();
        $un->getBr();
        $circle = new Circle(6);
        echo $circle->area();
        $un->getBr();
        echo $sqrt->per();
        $un->getBr();
        //Traites
        trait myTraite {
            public function hello(){
                echo "Hello World";
            }
        }
        class MyClass{
            use myTraite;
        }
        $exsample = new MyClass();
        $exsample->hello();
        $un->getBr();
        //M method
        class Exsample {
            //
            public function __construct()
            {
                echo "Aute aliqua ipsum velit cupidatat adipisicing voluptate id laboris mollit elit non. Aliqua est sit sint mollit reprehenderit ullamco";
            }
            //
            public function __destruct()
            {
                echo "__destruct";    
            }
            //
            public function __call($name, $arguments)
            {
                echo "Function {$name} not found";
            }
            //
            public function __get($name)
            {
                echo "Attr {$name} not found";
            }
            //
            public function __set($name, $value)
            {
                echo "{$name} is {$value}";
            }
        }
        $exsample = new Exsample(); 
        $un->getBr();
        $exsample->hello();
        $un->getBr();
        $exsample->test;
        $un->getBr();
        $exsample->test = 'TEST';
