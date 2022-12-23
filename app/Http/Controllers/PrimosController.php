<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $result_Cal = $request->inputNumber;
        return view('primos', compact('result_Cal'));
        
    }

   
}
