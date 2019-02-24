@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-white bg-dark">Seja bem-vindo - Painel de controle EasyHome</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="row justify-content-center">
                   <h3>Acesso aos cômodos da casa:</h3>

                   <a type="button" class="btn btn-primary btn-lg btn-block" href="{{route('sala')}}">Sala de Estar</a>
                   <a type="button" class="btn btn-dark btn-lg btn-block" href="{{route('cozinha')}}">Cozinha</a>
                   <a type="button" class="btn btn-primary btn-lg btn-block" href="{{route('banheiro')}}">Banheiro</a>
                   <a type="button" class="btn btn-dark btn-lg btn-block" href="{{route('quarto')}}">Quarto</a>
                   <a type="button" class="btn btn-primary btn-lg btn-block" href="{{route('garagem')}}">Garagem</a>
                   <a type="button" class="btn btn-dark btn-lg btn-block" href="{{route('lavanderia')}}">Lavanderia</a>
                   <a type="button" class="btn btn-primary btn-lg btn-block" href="{{route('jardim')}}">Jardim</a>

                
                </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
