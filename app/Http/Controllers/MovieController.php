<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $title = 'title';
        $original_title = 'original_title';
        $nationality = 'nationality';
        $date = 'date';
        $vote = 'vote';
        return view ('home', compact('title', 'original_title', 'nationality', 'date', 'vote'));
    }
}
