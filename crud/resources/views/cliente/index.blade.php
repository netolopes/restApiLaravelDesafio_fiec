@extends('cliente.master')
@section('content')
<br/>
<div style="border:#ccc solid 1px;padding:5px">
  <p><b>Cadastro Cliente</b></p>
<form action="{{route('clientes.store')}}" method="post" role="form">
  <input type="hidden" name="_token" value="{{csrf_token()}}">

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong></strong>
            <td>&nbsp;</td>

              <strong>Nome:</strong>
            <td><input type="text" class="" id=""  name="nome" value=""></td>

              <strong>CPF:</strong>
            <td>(Só Numeros)<input type="text" class="" id=""  name="cpf" value=""></td>

              <strong>Nascimento:</strong>
            <td>YYYY-MM-DD<input type="text" class="" id=""  name="dataNasc" value=""> </td>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

          <div class="col-xs-12 col-sm-12 col-md-12">
             <button type="submit" class="btn btn-primary">Salvar</button>
         </div>
    </div>
</div>
</form>


</div>
    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">

                <div class="pull-left">
                    &nbsp;&nbsp;<a href="{{  route('indexEvent', ['filter' => '2']) }}" class="btn btn-success">consoante - idade menor</a>
                  &nbsp;&nbsp;<a href="{{  route('indexEvent', ['filter' => '1']) }}" class="btn btn-success">vogal - idade maior</a>
                    &nbsp;&nbsp;<a href="{{  route('indexEvent', ['filter' => '3']) }}" class="btn btn-success">Term 'A' - RES</a>
                      &nbsp;&nbsp;<a href="{{  route('indexEvent', ['filter' => '4']) }}" class="btn btn-success">Contem 'MARIA'</a>
                        &nbsp;&nbsp;<a href="{{  route('indexEvent', ['filter' => '5']) }}" class="btn btn-success">CRUD</a>

                </div>
            <div class="pull-right">

                <a href="{{route('enderecos.index')}}" class="btn btn-success">Graficos</a>
            </div>
        </div>
    </div>
    @if($message=Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Nasc</th>
                <th width="280px">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clientes as $cli)

                <tr>
                    <td>{{$cli->id}}</td>
                    <td>{{$cli->nome}}</td>
                    <td>{{$cli->cpf}}</td>
                    <td>{{date('d/m/Y', strtotime($cli->dataNasc))}} </td>

                    <td>
<form action="{{route('clientes.destroy',$cli->id)}}" method="post" role="form">
                            <a href="{{route('clientes.show',$cli->id)}}" class="btn btn-info">Show</a>
                            <a href="{{route('clientes.edit',$cli->id)}}" class="btn btn-primary">Edit</a>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="_method" value="DELETE">
                             <button type="submit" class="btn btn-danger">Delete</button>
                         </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
