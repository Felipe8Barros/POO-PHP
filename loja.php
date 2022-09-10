<?php

//Classe

class Invoice {

    private $n_item;
   
    private $desc;
    private $qtd;
    private $preco;

    // Construtor
 
    public function __construct($par0 ,$par2, $par3, $par4)
    {
        $this ->n_item = $par0;
 
        $this->desc=$par2;
        
        if($par3 <= 0)
        {
            $this->qtd= 0;
        }else
        {
            $this->qtd=$par3;
        } 
        if($par4 <= 0)
        {
            $this->preco = 0.0;
        }else
        {
            $this->preco =$par4;
        }
    
    }

    public function getInvoiceAmount()
     { return $this->qtd * $this->preco; }


    public function __set($at, $val){
         $this->$at = $val;
    }


    public function __get($at){
        return $this->$at ;
    }
    
}

?>