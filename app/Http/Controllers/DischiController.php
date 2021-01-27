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
}
