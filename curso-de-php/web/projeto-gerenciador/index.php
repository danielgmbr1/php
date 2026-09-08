<?php

require_once 'functions.php';

$title = 'Lista de produtos';

define('COMPONENTS', getComponentsPath());
$products = [
    [
        'name' => 'RTX 5090',
        'unit' => 'Novo',
        'quantity' => 10

    ],
    [
        'name' => 'Ryzen 5600',
        'unit' => 'Semi-Novo',
        'quantity' => 8
    ],
    [
        'name' => '16 GB RAM Kingstom',
        'unit' => 'Usado',
        'quantity' => 2    
    ]

];

$data = [
    'title' => 'Lista de produtos',
    'products' => $products
];

makePage($data);