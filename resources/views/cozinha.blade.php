@extends('layouts.app')

@section('content')

<div class="container">
    
    <a type="button" class="btn btn-success btn-lg btn-block" href="lampada/ligar">Ligar Lâmpada</a>
    <a type="button" class="btn btn-danger btn-lg btn-block" href="lampada/desligar">Desligar Lâmpada</a>


    <a type="button" class="btn btn-success btn-lg btn-block" href="ventilador/ligar">Ligar Ventilador</a>
    <a type="button" class="btn btn-danger btn-lg btn-block" href="ventilador/desligar">Desligar Ventilador</a>


</div>

   


@endsection