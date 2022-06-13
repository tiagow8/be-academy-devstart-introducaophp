<?php

    $arquivo = fopen("file.csv", "a+");


    fwrite($arquivo, "Tiago" . PHP_EOL);
    fwrite($arquivo, "Gomes" . PHP_EOL);


    fclose($arquivo);