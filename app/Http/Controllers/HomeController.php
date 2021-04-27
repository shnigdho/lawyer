<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index (){
        return view('index');
    }
    function home1 (){
        return view('home');
    }
    function practice (){
        return view('practice');
    }

}
