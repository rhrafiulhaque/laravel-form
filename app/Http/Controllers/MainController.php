<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function main(){
        return view("welcome");
    }

    function features(){
        return view("features");
    }

    function contract(){
        return view("contract");
    }
    
    
}
