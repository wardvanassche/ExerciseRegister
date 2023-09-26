<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercisesController extends Controller
{
    public function index()
    {
        return view('exercises');
    }

    public function create()
    {
        return view('create');
    }
}
