<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(){
        $title = 'Homepage';

        return view('home', compact ('title'));
    }
}