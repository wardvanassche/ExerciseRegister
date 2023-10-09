<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required'
        ]);

        $exercise = new Exercise();

        $exercise->name = $request->input('name');
        $exercise->category_id = $request->input('category');

        $exercise->save();

        redirect()->route('exercises.index');
    }
}
