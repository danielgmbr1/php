<?php

function makeNotFound(): void{
    makePage('not_found', [
        'title' => 'Pagina não encontrada'    
    ]);
}