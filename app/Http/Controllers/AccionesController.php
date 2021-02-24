<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccionesController extends Controller
{
    public function index(){
        return view('acciones');
    }
}
