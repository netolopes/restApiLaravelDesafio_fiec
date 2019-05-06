@extends('cliente.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">

                <div class="pull-left">
                    &nbsp;&nbsp;<a href="{{  route('indexEvent', ['filter' => '2']) }}" class="btn btn-success">consoante - idade menor</a>
                  &nbsp;&nbsp;<a href="{{  route('indexEvent', ['filter' => '1']) }}" class="btn btn-success">vogal - idade maior</a>
                    &nbsp;&nbsp;<a href="{{  route('indexEvent', ['filter' => '3']) }}" class="btn btn-success">Term 'A' - RES</a>
                      &nbsp;&nbsp;<a href="{{  route('indexEvent', ['filter' => '4']) }}" class="btn btn-success">Contem 'MARIA'</a>
                        &nbsp;&nbsp;<a href="{{  route('indexEvent', ['filter' => '5']) }}" class="btn btn-success">CRUD</a>

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

            </tr>
            </thead>
            <tbody>
            @foreach($clientes as $cli)

                <tr>
                    <td>{{$cli->id}}</td>
                    <td>{{$cli->nome}}</td>
                    <td>{{$cli->cpf}}</td>
                    <td>{{date('d/m/Y', strtotime($cli->dataNasc))}} </td>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
