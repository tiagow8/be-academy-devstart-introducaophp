<?php

    $nome = "Tiago";
    $sobrenome = "Gomes";
    $idade = 21;

    $nome0 = "Tiago";
    $nome0 .= " Gomes";   //Elivandro Silva
    $cidade = "Reriutaba";

    echo $nome . " " . $sobrenome;
    echo "<br/>";
    echo $nome0;
    echo "<br/>";
    echo "Eu me chamo ". $nome . " " . $sobrenome . " tenho ". $idade . " anos e moro em " . $cidade;
    echo "<br/>";
    echo "Eu me chamo {$nome0} tenho {$idade} anos e moro em {$cidade}";