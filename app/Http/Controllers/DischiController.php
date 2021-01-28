<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disco;

class DischiController extends Controller
{
    public function index(){

      $allData = Disco::all();

      //$discoAttributes = $data['attributes'];

      return view('dischi', compact('allData'));

    }

    public function show($id){

      $disco = Disco::find($id);

      return view('disco', compact('disco'));
    }

}
