<?php

include("loja.php");
    
    $loja_inf = new Invoice ("001","Pente de Memoria 8 GB DDR3",2, 400);

        echo"<p></p>";
        echo "nº Item Faturado: ".$loja_inf->n_item ;
        echo"<p></p>";
        echo  "Descriçaõ: ". $loja_inf -> desc;
        echo"<p></p>";
        echo "Quantidade: ".$loja_inf -> qtd ;
        echo"<p></p>";
        echo  "Preço: ".number_format($loja_inf -> preco, 2 , ",", ".");
        echo"<p></p>";
        echo  "Total: ".number_format($loja_inf -> getInvoiceAmount(), 2 , ",", ".");

?>
   