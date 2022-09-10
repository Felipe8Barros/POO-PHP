<?php

include("empregado.php");

    $empregado = new Empregado ("Rainha","Elisabeth II", 30000);

        echo"<p></p>";
        echo "Primeiro Nome : ".$empregado->nome;
        echo"<p></p>";
        echo  "Sobrenome : ".$empregado ->sob_nome;
        echo"<p></p>";
        echo  "Salário Mensal : ".number_format($empregado -> sal, 2 , ",", ".");
        echo"<p></p>"; 
        echo  "Salário Anual : ".number_format($empregado -> salAnual(), 2 , ",", ".");
        echo"<p></p>";
        echo  "10% de aumento no salário : ".number_format($empregado -> salIncrease(), 2 , ",", ".");

?>