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
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome do cliente" value="{{$cliente->nome}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{$cliente->email}}">
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereço</label>
                            <input type="text" name="endereco" class="form-control" placeholder="Endereço" value="{{$cliente->endereco}}">
                        </div>
                        <button class="btn btn-info">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection