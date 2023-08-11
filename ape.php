<?php
    class Ape extends Animal
    {
        public $legs = 2;
        public $yell;

        public function get_legs() 
        {
            echo "legs : ";
            return $this->legs . "<br>";
        }

        public function get_yell() 
        {
            echo "Yell : ";
            return $this->yell = "Auooo" . "<br>";
        }
    }
?>