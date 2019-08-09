@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <ol class="breadcrumb card-header">
                    <li class="breadcrumb-item"><a href="{{route('cliente.index')}}">Cliente</a></li>
                    <li class="breadcrumb-item active">Editar</li>
                </ol>
                <div class="card-body">
                <form action="{{route('cliente.atualizar', $cliente->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group {{$errors->has('nome') ? 'has-error' :''}}">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome do cliente" value="{{$cliente->nome}}">
                            @if($errors->has('nome'))
                                <span class="help-block">
                                    <strong>{{$errors->first('nome')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('email') ? 'has-error' :''}}">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email" value="{{$cliente->email}}">
                            @if($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{$errors->first('email')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('endereco') ? 'has-error' :''}}">
                            <label for="endereco">Endereço</label>
                            <input type="text" name="endereco" class="form-control" placeholder="Endereço" value="{{$cliente->endereco}}">
                            @if($errors->has('endereco'))
                                <span class="help-block">
                                    <strong>{{$errors->first('endereco')}}</strong>
                                </span>
                            @endif
                        </div>
                        <button class="btn btn-info">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection