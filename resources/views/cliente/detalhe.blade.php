@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <ol class="breadcrumb card-header">
                    <li class="breadcrumb-item"><a href="{{route('cliente.index')}}">Cliente</a></li>
                    <li class="breadcrumb-item active">Detalhes</li>
                </ol>
                <div class="card-body">
                    <p><b>Cliente: </b>{{$cliente->nome}}</p>
                    <p><b>E-mail: </b>{{$cliente->email}}</p>
                    <p><b>Endereço: </b>{{$cliente->endereco}}</p>
                    
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Número</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cliente->telefones as $telefone)
                            <tr>
                                <th scope="row">{{$telefone->id}}</th>
                                <td>{{$telefone->titulo}}</td>
                                <td>{{$telefone->telefone}}</td>
                                <td>
                                <a class="btn btn-default" href="{{route('telefone.editar', $telefone->id)}}">Editar</a>
                                <a class="btn btn-danger" href="javascript:(confirm('Deletar esse registro?') ? window.location.href='{{route('telefone.deletar', $telefone->id)}}' : false)">Deletar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <p>
                        <a class="btn btn-info btn-white" href="{{route('telefone.adicionar', $cliente->id)}}">Adicionar Telefone</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
