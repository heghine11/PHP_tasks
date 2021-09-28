<?php
    abstract class Car {
        protected $color;
        private $speed;
        protected $year;
        public function __construct($color, $speed, $year) {
            $this->color = $color;
            $this->speed = $speed;
            $this->year = $year;
        }
        protected function getSpeed() {
            return $this->speed;
        }
        abstract public function getInfo();
    }

    class MiniCooper extends Car {
        public function getInfo() {
            return "Car with color $this->color is fantastic!";
        }
    }

    class Mercedes extends Car {
        public function getInfo() {
            return "The speed of this car is " . $this->getSpeed() . ".";
        }
    }

    class Nissan extends Car {
        public function getInfo() {
            return "The creation year is $this->year.";
        }
    }

    $miniCooper = new MiniCooper("yellow", 200, 2020 );
    echo $miniCooper->getInfo();
    echo "<br>";

    $mercedes = new Mercedes("blue", 250, 2000);
    echo $mercedes->getInfo();
    echo "<br>";

    $nissan = new Nissan("white", 190, 2003);
    echo $nissan->getInfo();
