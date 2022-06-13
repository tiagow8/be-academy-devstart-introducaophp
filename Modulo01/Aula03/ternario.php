<?php
    $nome = "Tiago";
    $sobrenome = "Gomes";
    $idade = 21;

    echo $idade >= 18 ? "Maior de idade" : "Menor de idade";

    echo "<br/>";

    echo isset($nome) ? $nome : "nome não declarado";
    echo " ";

    
    echo $sobrenome ?? "sobrenome não estipulado";
