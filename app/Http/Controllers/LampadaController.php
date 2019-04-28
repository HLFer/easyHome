<?php

namespace EasyHome\Http\Controllers;

use Illuminate\Http\Request;

class LampadaController extends Controller
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
        return view('sala');
    }
    public function ligar(){
        //Executa o script na pasta python - comando para ligar lâmpada
        $comando = "cd ../scripts && python ligar.py";
        pclose(popen($comando, 'r'));
        //Redireciona a página para /cozinha após executar o comando
        return redirect('/sala');
    }
    public function desligar(){
        //Executa o script na pasta python - comando para desligar lâmpada
        $comando = "cd ../scripts && python desligar.py";
        pclose(popen($comando, 'r'));
        //Redireciona a página para /cozinha após executar o comando
        return redirect('/sala');
    }
}
