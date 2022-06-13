<?php

    $notasCursoX = [
        10,
        10,
        9.5,
        6,
    ];

    $notasCursoY = [
        8,
        9.4,
        9,
        7,
    ];

    function mediaDeNotas (array $notas): float
    {
        // $total = array_sum($notas);
        // $quantidade = count($notas);

        // foreach($notas as $cadaNota){
        //     $total += $cadaNota;
        //     $quantidade++;
        // }

        return array_sum($notas) / count($notas);
    }

    echo mediaDeNotas($notasCursoX).PHP_EOL;
    echo mediaDeNotas($notasCursoY);