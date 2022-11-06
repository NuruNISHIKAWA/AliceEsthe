<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EstheticRequest;

class EstheticController extends Controller
{
     public function index(Request $request)
    {
        $request->session()->forget('girl');
        /*dd($request);*/
        return view('top');
    }

public function list()
    {
        return view('list');
    }

    public function girl(Request $request)
    {

        $form=$request->session()->get('girl');
        return view('girl',['form' => $form]);
    }

      public function schedule()
    {
        return view('schedule');
    }

          public function menu()
    {
        return view('menu');
    }

              public function access()
    {
        return view('access');
    }

              public function recruit()
    {
        return view('recruit');
    }


              public function form()
    {
        return view('form');
    }


   public function theraphist(EstheticRequest $request)
    {
        $form = $request->all();
       $request->session()->put('girl',$form);
        return redirect('/girl');
    }


}
