<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        $name = 'Joao';
        $habits = ['Ler', 'Correr', 'Estudar', 'Jogar'];

        return view('home', [
            'name' => $name,
            'habits' => $habits,
        ]);
    }
}
