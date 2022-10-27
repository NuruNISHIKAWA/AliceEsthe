<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstheticController extends Controller
{
     public function index()
    {
        return view('top');
    }

public function list()
    {
        return view('list');
    }

    public function girl()
    {
        return view('girl');
    }

      public function schedule()
    {
        return view('schedule');
    }

          public function menu()
    {
        return view('menu');
    }

}
