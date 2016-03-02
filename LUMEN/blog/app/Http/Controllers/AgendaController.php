<?php

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Entities\Pessoa as Pessoa;

class AgendaController extends Controller
{
    public function index($letra = "A")
    {
        # $pessoas = Pessoa::all(); #
        $pessoas = Pessoa::where('apelido', 'like', $letra.'%')->get();
        return view('agenda', compact('pessoas'));
    }

    //
}
