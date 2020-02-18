@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Cliente</div>

                <div class="panel-body">
                <form name="cadastroUser" method="POST" action=" {{route('cadastrar.cliente.atualizar', $registro->id)}}">
                    <input type="hidden" name="_method" value="put">
                    <input type="hidden" name="user_atualizacao" value="{{Auth::user()->name}}">
                        @include('layouts.form')
                    <button class="btn btn-sm  btn-success"> Atualizar </button>
                    <a class="btn btn-sm btn-danger" href="{{route('home.cadastro')}}">Voltar </a>
  
                </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
