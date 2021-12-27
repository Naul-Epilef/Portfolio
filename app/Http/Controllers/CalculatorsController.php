<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorsController extends Controller
{
    public function index(){
        return view("calculator.index");
    }

    public function rulesOfThree(){
        return view("calculator.rulesOfThree");
    }
}
