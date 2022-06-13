<?php

    $data = new DateTime();
    $mes = $data->format('m');

    echo match($mes){
        "01" => "Janeiro",
        "02" => "Fevereiro",
        "03" => "Março",
        "04" => "Abril",
        "05" => "Maio",
        "06" => "Junho",
        "07" => "Julho",
        "08" => "Agosto",
        default => "Mês inválido!!"
    };