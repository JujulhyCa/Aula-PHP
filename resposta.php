<?php
    // COMENTÁRIO
    # COMENTÁRIO
    /* COMENTÁRIO
        vjjhjggjk */
    $nome = $_POST['nome'];
    echo 'Seja bem-vinda,' .$nome.'!'; // echo = print  
    // . (PONTO) é o sinal de concatenação no PHP
    echo "Seja bem-vinda, $nome!"; // pode ser assim com " " (aspas duplas) ou da maneira 
    // acima com ' '(aspas simples)

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $soma = $valor1 + $valor2;
    $sub = $valor1 - $valor2;
    $mult = $valor1 * $valor2;
    $div = $valor1 / $valor2;

    echo "<p>Soma = $soma</p>"; // tudo que o servidor responde é HTML <p> parágrafo
    echo "<p>Subtração = $sub</p>";
    echo "<p>Multiplicação = $mult</p>";
    echo "<p>Divisão = $div</p>";

