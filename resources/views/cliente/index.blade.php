@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <ol class="breadcrumb card-header">
                    <li class="breadcrumb-item active" aria-current="page">Cliente</li>
                </ol>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                                        
                    <p>
                        <a class="btn btn-info" href="{{route('cliente.adicionar')}}">Adicionar</a>
                    </p>
                    

                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Endereço</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clientes as $cliente)
                            <tr>
                                <th scope="row">{{$cliente->id}}</th>
                                <td>{{$cliente->nome}}</td>
                                <td>{{$cliente->email}}</td>
                                <td>{{$cliente->endereco}}</td>
                                <td>
                                <a class="btn btn-default" href="{{route('cliente.detalhe', $cliente->id)}}">Detalhe</a>
                                <a class="btn btn-default" href="{{route('cliente.editar', $cliente->id)}}">Editar</a>
                                <a class="btn btn-danger" href="javascript:(confirm('Deletar esse registro?') ? window.location.href='{{route('cliente.deletar', $cliente->id)}}' : false)">Deletar</a>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    <div style="margin: 0 auto;">
                        {!! $clientes->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
