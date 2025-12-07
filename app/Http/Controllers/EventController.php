<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Miguel";

        return view('welcome', ['nome' => $nome]);
    }

    public function index2(){
        $nomes = ["Alexandre", "Armando", "Bruno", "Márcio", "Tiago", "Simão"];
        $numeros = [0,1,2,3,4,5];

        return view('contacts', ['nomes' => $nomes, 'numeros' => $numeros]);

    }

    public function index3() {
        return view('create');
    }
}
