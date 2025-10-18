<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OgolneController extends Controller
{
   public function start()
   {
    return view('welcome');
   }

   public function kontakt()
   {
    return view('kontakt');
   }

   public function onas()
   {
    $zadania =[
        'Zadanie 1',
        'Zadanie 2',
        'Zadanie 3'
    ];
    $tasks =[
        'Task 1'
    ];
    // return view('onas', ['zadania'=> $zadania]);
    // return view('onas')->with('zadania', $zadania)->with('tasks', $tasks);
    return view('onas', compact('zadania', 'tasks'));
   }
}
