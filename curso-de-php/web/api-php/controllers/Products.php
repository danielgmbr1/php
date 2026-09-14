<?php

function makeProducts(): void{
    makePage('products', [
        'title' => 'Pagina de produtos'    
    ]);
}

function makeProduct(): void{
    makePage('product', [
        'title' => 'Pagina do produto',
        'productId' => 5,
        'regex' => 'produto'
    ]);
}