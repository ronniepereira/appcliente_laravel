@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <ol class="breadcrumb card-header">
                        <li class="breadcrumb-item"><a href="{{route('cliente.index')}}">Cliente</a></li>
                        <li class="breadcrumb-item"><a href="{{route('cliente.detalhe', $telefone->cliente->id)}}">Detalhe</a></li>
                        <li class="breadcrumb-item active">Editar</li>
                    </ol>
                    <div class="card-body">
                        <p><b>Cliente: </b>{{$telefone->cliente->nome}}</p>
                        <form action="{{route('telefone.atualizar', $telefone->id)}}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="put">
                            <div class="form-group">
                                <label for="titulo">Titulo</label>
                                <input type="text" name="titulo" class="form-control" placeholder="Titulo do telefone" value="{{$telefone->titulo}}">
                            </div>
                            <div class="form-group">
                                <label for="telefone">Número</label>
                                <input type="text" name="telefone" class="form-control" placeholder="Numero do telefone" value="{{$telefone->telefone}}">
                            </div>
                            <button class="btn btn-info btn-white">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection