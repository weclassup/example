<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{

    public function show(){
        echo $_GET['HW'];
        $con = '01';
        return View('welcome', ['HW'=> $_GET['HW']]) ;
    }
}

