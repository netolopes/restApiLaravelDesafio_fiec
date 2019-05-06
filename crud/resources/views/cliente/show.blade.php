@extends('cliente.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
            <div class="pull-left">
                <h2>Show Cliente</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('clientes.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                <td>{{$clientes[0]->id}}</td>

                  <strong>Nome:</strong>
                <td>{{$clientes[0]->nome}}</td>

                  <strong>CPF:</strong>
                <td>{{$clientes[0]->cpf}}</td>

                  <strong>Nascimento:</strong>
                <td>{{date('d/m/Y', strtotime($clientes[0]->dataNasc))}} </td>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
  {{$aux=0}}
            @foreach($clientes as $cli)

            <div class="form-group">
                <strong>ENDEREÇO ------- {{$aux +=1}} -------</strong>
            </div>
            <div class="form-group">
                <strong>cep:</strong>
                {{$cli->cep}}
            </div>
            <div class="form-group">
                <strong>Logradouro:</strong>
                {{$cli->logradouro}}
            </div>
            <div class="form-group">
                <strong>Complemento:</strong>
                {{$cli->complemento}}
            </div>
            <div class="form-group">
                <strong>Localidade:</strong>
                {{$cli->localidade}}
            </div>
            <div class="form-group">
                <strong>UF:</strong>
                {{$cli->uf}}
            </div>
            <div class="form-group">
                <strong>Tipo:</strong>
                @if($cli->tipo == 1)
                   RES
                   @endif
                @if($cli->tipo == 2)
                   COM
                   @endif
                   @if($cli->tipo == '')

                      @endif
            </div>

              @endforeach
        </div>
    </div>
@endsection
