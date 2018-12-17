@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique seu endereço de e-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um link com a verificação de senha foi enviado para seu e-mail.') }}
                        </div>
                    @endif

                    {{ __('Por favor, verifique seu e-mail antes de continuar com o procedimento.') }}
                    {{ __('Se você ainda não recebeu o e-mail') }}, <a href="{{ route('verification.resend') }}">{{ __('Clique aqui para enviar outro') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
