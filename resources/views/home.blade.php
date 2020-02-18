@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading ">Listar Cliente
                    
                </div>

                <div class="col-md-offset-10">
                    <a class="btn btn-sm btn-success" href="{{route('cadastrar.cliente.form')}}">Cadastrar </a>
                </div>
                

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover table-sm">
                            <tbody>
                                <tr class="info">   
                                    <td>NOME</td>
                                    <td>CPF</td>
                                    <td>RG</td>
                                    <td>NASCIMENTO</td>
                                    <td>TELEFONE</td>
                                    <td>CIDADE</td>

                                </tr>
                                @foreach($dados as $dado)
                                    <tr>
                                        <td> {{$dado->nome}} </td>
                                        <td> {{$dado->cpf}} </td>
                                        <td> {{$dado->rg}} </td>
                                        <td> {{$dado->nascimento}} </td>
                                        <td> {{$dado->telefone}} </td>
                                        <td> {{$dado->cidade}} </td>
                                        
                                        <td><a class="btn btn-sm btn-info" href="{{route('cadastrar.cliente.editar',$dado->id)}}">Editar </a>
                                        <td><a class="btn btn-sm btn-danger" href="{{route('cadastrar.cliente.deletar',$dado->id)}}">Excluir </a>
                                    </tr>
                                @endforeach
                            </tbody>
                        <table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
