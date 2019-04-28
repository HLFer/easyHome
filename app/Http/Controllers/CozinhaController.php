<?php

namespace EasyHome\Http\Controllers;

use Illuminate\Http\Request;
use EasyHome\Http\Controllers\DispositivosController;

class CozinhaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cozinha');
    }
}
