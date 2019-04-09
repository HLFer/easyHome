@extends('layouts.app')
@section('content')
<link href="css/style.css" rel="stylesheet" type="text/css"> 
<div class="container home">
    <div class="card-header text-white bg-dark">Seja bem-vindo - Painel de controle EasyHome</div>
        <h3>Acesso aos cômodos da casa:</h3>
        <div class="row">
            <div class="w-25 p-3"><a type="button" class="btn btn-primary btn-lg btn-block" href="{{route('sala')}}">Sala de Estar</a></div><br>
            <div class="w-25 p-3"><a type="button" class="btn btn-dark btn-lg btn-block" href="{{route('cozinha')}}">Cozinha</a></div>
            <div class="w-25 p-3"><a type="button" class="btn btn-primary btn-lg btn-block" href="{{route('banheiro')}}">Banheiro</a></div>
            <div class="w-25 p-3"><a type="button" class="btn btn-dark btn-lg btn-block" href="{{route('quarto')}}">Quarto</a></div>
            <div class="w-25 p-3"><a type="button" class="btn btn-primary btn-lg btn-block" href="{{route('garagem')}}">Garagem</a></div>
            <div class="w-25 p-3"><a type="button" class="btn btn-dark btn-lg btn-block" href="{{route('lavanderia')}}">Lavanderia</a></div>
            <div class="w-25 p-3"><a type="button" class="btn btn-primary btn-lg btn-block" href="{{route('jardim')}}">Jardim</a></div>
            <div class="w-25 p-3"><a type="button" class="btn btn-dark btn-lg btn-block" href="">Nadas</a></div>
        </div>
    </div>      
</div>
@endsection
