<?php

$toDo = [
    [
        'name' => 'Lavatrice',
        'description' => 'Fare la lavatrice',
        'status' => true,
    ],
    [
        'name' => 'Cucinare',
        'description' => 'Fare da mangiare',
        'status' => false,
    ],
    [
        'name' => 'Pulire',
        'description' => 'Fare le pulizie',
        'status' => false,
    ],
    [
        'name' => 'Bollette',
        'description' => 'Pagare le bollette',
        'status' => true,
    ],
];

header('Content-Type: application/json');

$stringaConDati = json_encode($toDo);

echo $stringaConDati;

?>