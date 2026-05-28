<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        $nome = "Eloisy";
        $idade = 24;

        $arr = [1, 2, 3, 4, 5];

        $nomes = ["Eliana", "Edson", "Euripia", "Alberto", "Marcos"];

        return view(
            'welcome',
            [
                'nome' => $nome,
                'idade2' => $idade,
                'profissao' => "Analista de dados",
                'arr' => $arr,
                'nomes' => $nomes
            ]);
    }

    public function create(){
        return view('events.create');
    }
}
