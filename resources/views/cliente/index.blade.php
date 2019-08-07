@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bem Vindo!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    Voce está na lista de Clientes...
                    @foreach($clientes as $cliente)
                    <li>{{$cliente->nome}}</li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
