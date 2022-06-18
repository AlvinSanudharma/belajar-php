<?php 

// Array

    // Indexed Array
    $a = ['BMW', 'Honda', 'Suzuki'];
    echo $a[0];

    // Associative Array
    $b = [
        'Indonesia' => 'Nasi Padang',
        'Singapura' => 'Nasi Lemak',
        'Amerika' => 'Steak'
    ];
    echo $b['Singapura'];

    // Multidimensional Array
    $c = [
        'a' => $a,
        'b' => $b
    ];
    echo $c['a']['1'];

    $d = [
        'c' => $c,
        'Lainnya' => [1, 2, 3, 4]
    ];
    echo $d['Lainnya'];