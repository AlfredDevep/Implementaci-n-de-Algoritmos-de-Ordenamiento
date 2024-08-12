<?php

    /**
     * Implementa una función que ordene una lista de palabras 
     * alfabéticamente utilizando el algoritmo Merge Sort. 
     * Muestra la lista antes y después de aplicar el algoritmo.
     */
    function mergeSort($words) {
        if (count($words) <= 1) {
            return $words;
        }
        $middle = count($words) / 2;
        $left = array_slice($words, 0, $middle);
        $right = array_slice($words, $middle);
        $left = mergeSort($left);
        $right = mergeSort($right);
        return merge($left, $right);
    }
    function merge($left, $right) {
        $result = [];
        while (count($left) > 0 && count($right) > 0) {
            if ($left[0] < $right[0]) {
                array_push($result, array_shift($left));
            } else {
                array_push($result, array_shift($right));
            }
        }
        while (count($left) > 0) {
            array_push($result, array_shift($left));
        }
        while (count($right) > 0) {
            array_push($result, array_shift($right));
        }
        return $result;
    }
    
    
    $words = ["hola", "perro", "gato", "oso", "zorro"];

    echo "Lista original: " . implode(", ", $words) . "\n";
    echo "Lista ordenada: " . implode(", ", mergeSort($words)) . "\n";


?>