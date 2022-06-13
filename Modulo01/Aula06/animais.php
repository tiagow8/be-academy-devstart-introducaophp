<?php

    $animais = [
        "Urso",  //0
        "Gato",   //1
        "Formiga",  //2
        "Teiú",  //3
        "Garça",  //4
    ];

    $bandas[80] = "Peixe";
    $bandas[20] = "Caranguejo";

    echo "<ul>";

    foreach($animais as $animais){
        echo "<li>{$animais}</li>";
    }

    echo "</ul>";