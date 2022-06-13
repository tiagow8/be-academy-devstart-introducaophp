<?php

    $nome = "Tiago";
    $sobrenome = "Gomes";

    $nome2 = "Antonio Tiago Gomes da Silva";

    echo "Nome: ". ucfirst($nome).PHP_EOL;
    echo "Sobrenome: ". ucfirst(strtolower($sobrenome)).PHP_EOL;
    echo "Nome: ". ucwords($nome2);