@extends('cliente.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
            <div class="pull-left">
                <h2>Edit Cliente</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('clientes.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <br>

    <form action="{{route('clientes.update',$clientes[0]->id)}}" method="post" role="form">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input type="hidden" name="_method" value="PUT">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong></strong>
                <td><input type="hidden" class="" id=""  name="id" value="{{$clientes[0]->id}}"></td>

                  <strong>Nome:</strong>
                <td><input type="text" class="" id=""  name="nome" value="{{$clientes[0]->nome}}"></td>

                  <strong>CPF:</strong>
                <td><input type="text" class="" id=""  name="cpf" value="{{$clientes[0]->cpf}}"></td>

                  <strong>Nascimento:</strong>
                <td>YYYY-MM-DD<input type="text" class="" id=""  name="dataNasc" value="{{$clientes[0]->dataNasc}}"> </td>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

              <div class="col-xs-12 col-sm-12 col-md-12">
                 <button type="submit" class="btn btn-primary">Update</button>
             </div>
        </div>
    </div>
  </form>

@endsection
