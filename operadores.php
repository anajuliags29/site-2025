<?php
/*
O que são operadores?
    - símbolos que realizam operações valores(operando).

    *Aritméticos:
    + (adição), - (subtração), * (multiplicação),
    / (divisão), %(módulo - resto da divisão).
    
    * Atribuição:
    = (atribuição), +=, -=, *=, /=, %=, **= (
    atribuições combinadas)
    
    * Comparação:
    == (igual), === (idêntico - igual de valor e
    tipo), != ou <> (diferente), !== (não idêntico),
    > (maior que), <= (menor ou igual a).
    
    *Lógicos:
    && ou AND (E lógico), || ou OR (OU lógico), ! ou NOT (NÃO lógico).
    
    */

    // --> Operadores Aritméticos: Usados para realizar operações matemáticas. 
    
    $num1 = 10;
    $num2 = 5;

    $soma = $num1 + $num2; // Adição
    $subtracao = $num1 - $num2; // Subtração
    $multiplicacao = $num1 * $num2; // Multiplicação
    $divisao = $num1 / $num2; // Divisão
    $modulo = $num1 % $num2; // Módulo (resto da divisão)
    $potencia = $num1 ** $num2; // Exponenciação

    echo "SOMA É: ".$soma."<br>"; // Saída: SOMA = 15
    echo "SUBTRAÇÃO É: ".$subtracao."<br>"; // Saída: SUBTRAÇÃO = 5
    echo "MULTIPLICAÇÃO É:".$multiplicacao."<br>"; // Saída: MULTIPLICAÇÃO = 50
    echo "DIVISÃO É:".$divisao."<br>"; // Saída: DIVISÃO = 2
    echo "MÓDULO É: ".$modulo."<br>"; // Saída: MÓDULO = 
    echo "PONTÊNCIA É: ".$potencia."<br>"; // Saída: POTÊNCIA = 

    echo "<hr>";

    // --> Operadores de Atribuição: Usados para atribuir valores e variáveis.

    $x = 10; 
    $y = 20;

    $x += 5; // 15
    $y -= 3; // 17
    $x *= 2; // 30
    $y /= 4; // 4.25
    $x %= 3; // 0 

    echo "O VALOR DE X É :" . $x . "<br";
    echo "O VALOR DE Y É :" . $y . "<br>";

    echo "<hr>";
    // --> Operador de comparação: usados para comparar valores; o resultado é sempre um valor booleano (true ou false)
    $a = 8; 
    $b = "8";
    $c = 12;

    var_dump($a == $b); // Igual (valor):true
    echo "<br>";

    var_dump($a === $b); // Idêntico (valor): false
    echo "<br>";

    var_dump($a != $c); // (a-c) Diferente (valor):true
    echo "<br>";

    var_dump($a !== $c); // (a-c) Não identico (valor):true
    echo "<br>";

    var_dump($a > $c); // (a-c) Maior que :false
    echo "<br>";

    var_dump($a < $c); // (a-c) Menor que :true
    echo "<br>";

    var_dump($c >= 12); // (c-12) Maior ou igual a:true
    echo "<br>";

    var_dump($a <= 5 ); // (a-5) Menor ou igual a:false
    echo "<br>";

    echo "<hr>";

     // --> operadores logicos:usados para combinar expressões booleanas
    $idade = 25;
    $temcarteira = true;
    
        if ($idade >= 18 ) {  // AND (e): ambas as condiçoes devem ser verdadeiras
                echo "pode dirigir"; //Saida: Pode dirigir!
        } elseif ($temcarteira)  {
            echo "pode dirigir de novo";
        } else {
            echo "Não pode dirigir"; // saida: Não pode dirigir!


        }
        echo "<br>";

        $temdesconto = false;
        $eClienteNovo = false;

        if ($temdesconto || $eClienteNovo) {
            echo "tem direito ao desconto";// Aqui
        } else {
            echo "não tem direito ao desconto";
        }
        
        echo "<br>";

        $estaChovendo = false;
        
        if (!$estaChovendo) {
            echo "O dia esta ensolarado";
        } else {
            echo "esta chovendo";
        }

        echo "<hr>";

        // --> operadores de incremento/ decremento: usados para aumentar ou diminuir o valor de uma variavel numérica em 1.
        
        $contador = 0;

        echo $contador++; // pós -incremento: retornar o valor atual e depois incrementa (saida:0);
        echo "<br>";
        echo $contador; // Saida: 1
        echo "<br>";

        echo $contador++; // pré-incremento: incrementa e depois retorna o valor (saida: 2);
       
        echo $contador--; // pós -incremento: retornar o valor atual e depois incrementa (saida:0);
        echo "<br>";
        echo $contador; // Saida: 1
        echo "<br>";

        echo --$contador; // pré-incremento: incrementa e depois retorna o valor (saida: 2);

        echo "<hr>";

        // --> operador de concaneção de String: usado para juntar strings.

        $nome = "Ana Júlia";
        $sobrenome = "Guerra";
        $nomecompleto = $nome." ".$sobrenome;

        echo $nomecompleto; // saída: Ana Julia Guerra

        $mensagem = "Olá, ";
        $mensagem .= $nome; 
        echo "<br>" . $mensagem;
        // Saída: Olá, Ana Júlia
    ?>


