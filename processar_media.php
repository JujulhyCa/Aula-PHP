<?php
    /* Cálculo da média */

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
    $media = ($n1+$n2+$n3+$n4)/4;

    // se a nota for abaixo de 6 - reprovado
    // senão aprovado

    if ($media >= 6){ // para um único comando a {} é opcional
        echo "Aprovado!";
    } else {
        echo "Reprovado";
    }
