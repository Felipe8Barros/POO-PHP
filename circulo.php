<?php

    class Circulo {

        private $x;
        private $y;
        private $Raio;

        public function __construct($Raio,$a = 0, $b = 0 ) 
        {
            $this->x = $a;
            $this->y = $b;
        }

        public function __get($value)
        {
            return $this->$value;
        }

        public function __set($atributs, $value)
        {
            $this->$atributs = $value;
        }

        public function Inflar($value) 
        { 
           $this->Raio += $value; 
        }
   
        public function Desinflar($value) 
        { 
           $this->Raio -= $value; 
        }

        public function Mover($move) 
        {
            $this->x = $move;
            $this->y = $move;
        }
         
        public function Area() 
        { 
            return pi() * ($this->Raio * 2); 
        }
   
    }
?>