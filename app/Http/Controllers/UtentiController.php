<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utente;

class UtentiController extends Controller
{
    public function index(){

      $allData = Utente::all();

      //$discoAttributes = $data['attributes'];

      return view('utenti', compact('allData'));

    }

    public function show($id){

      $utente = Utente::find($id);

      return view('utente', compact('utente'));
    }
}
