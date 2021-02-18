<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Example;

class PagesController extends Controller
{
    public function home(Example $example){
        ddd($example);
    }
}
