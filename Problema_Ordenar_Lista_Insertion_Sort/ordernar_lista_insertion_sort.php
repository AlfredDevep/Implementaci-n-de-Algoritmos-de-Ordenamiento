<?php

    /** 
     * Crea un script que ordene una lista de nombres en orden 
     * alfabético utilizando el algoritmo Insertion Sort. Muestra
     * la lista antes y después de aplicar el algoritmo.
    */

    $nombres = ["Juan", "Pedro", "Ana", "Maria", "Luis", "Carlos", "Sofia", "Fernando", "Roberto", "Rosa"];

    function insertionSort($nombres) {
        $n = count($nombres);
        for ($i = 1; $i < $n; $i++) {
            $key = $nombres[$i];
            $j = $i - 1;
            while ($j >= 0 && $nombres[$j] > $key) {
                $nombres[$j + 1] = $nombres[$j];
                $j = $j - 1;
            }
            $nombres[$j + 1] = $key;
        }
        return $nombres;
    }

    echo "Lista original: " . implode(", ", $nombres) . "\n";
    echo "Lista ordenada: " . implode(", ", insertionSort($nombres)) . "\n";
?>