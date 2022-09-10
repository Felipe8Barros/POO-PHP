<?php

class Empregado {

    private $nome; //par
    private $sob_nome; //par1
    private $sal; //par2

    //Construtor

    public function __construct($par ,$par1, $par2)
    {
        $this ->nome = $par;
        $this->sob_nome=$par1;
        if($par2 <= 0)
        {
            $this->sal= 0;
        }else
        {
            $this->sal=$par2;
        } 
    }

    public function salIncrease()
    { 
        return $this->sal += $this->sal * 10 / 100; 
    }
    public function salAnual()
    { 
        return $this->sal * 12; 
    }
    
   public function __set($at, $val)
   {
        $this->$at = $val;
   }

   public function __get($at)
   {
       return $this->$at ;
   }

}

?>
