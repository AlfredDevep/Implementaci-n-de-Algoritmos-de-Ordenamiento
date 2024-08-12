<?php

    /**
     * Escribe un programa que ordene una lista de números de forma 
     * descendente utilizando el algoritmo Bubble Sort. La lista puede 
     * contener duplicados y valores negativos. Asegúrate de manejar 
     * estos casos y muestra la lista antes y después de aplicar el 
     * algoritmo.
     */
    
    $lista = [5, 3, -8, 2, 1, -4];

    function bubbleSort($lista) {
        $n = count($lista);
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($lista[$j] < $lista[$j + 1]) {
                    $temp = $lista[$j];
                    $lista[$j] = $lista[$j + 1];
                    $lista[$j + 1] = $temp;
                }
            }
        }
        return $lista;
    }

    echo "Lista original: " . implode(", ", $lista) . "\n";
    echo "Lista ordenada: " . implode(", ", bubbleSort($lista)) . "\n";
    ?>





?>