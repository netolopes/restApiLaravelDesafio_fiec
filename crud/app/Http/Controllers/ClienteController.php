<?php

namespace App\Http\Controllers;
use App\Cliente_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{

    public function index($filter = null)
    {

      if (is_null($filter))
   {
  //    $clientes=Cliente_model::all();
  $clientes=Cliente_model::all();
  return view('cliente.index',compact('clientes'));

   }
   else if($filter == 1)
   {
      $clientes = DB::select("SELECT * FROM cliente  WHERE LOWER(LEFT( nome ,1 )) IN ('a','e','i','o','u') order by dataNasc asc ");
      return view('cliente.rel',compact('clientes'));
      /*
      $clientes =  DB::table('cliente')
                ->join('endereco', 'endereco.cliente', '=', 'cliente.id')
                ->whereRaw("LOWER(LEFT( nome ,1 )) IN ('a','e','i','o','u')")
                ->orderBy('dataNasc', 'asc')
                ->get();
                */
   }
   else if($filter == 2)
   {
      $clientes = DB::select("SELECT * FROM cliente  WHERE LOWER(LEFT( nome ,1 )) NOT IN ('a','e','i','o','u') order by dataNasc DESC ");
      return view('cliente.rel',compact('clientes'));
      /*
    $clientes =  DB::table('cliente')
                    ->join('endereco', 'endereco.cliente', '=', 'cliente.id')
                    ->whereRaw("LOWER(LEFT( nome ,1 ))NOT IN ('a','e','i','o','u')")
                    ->orderBy('dataNasc', 'desc')
                    ->get();
                    */
   }
   else if($filter == 3)
   {
    //$clientes = DB::select("SELECT * FROM cliente  WHERE LOWER(LEFT( nome ,1 )) NOT IN ('a','e','i','o','u') order by dataNasc DESC ");

    $clientes =  DB::table('cliente')
                    ->join('endereco', 'endereco.cliente', '=', 'cliente.id')
                    ->where('nome', 'like', '%a')
                    ->where('tipo', '=', 1)
                    ->get();
     return view('cliente.rel2',compact('clientes'));
   }
   else if($filter == 4)
   {
    //  $clientes = DB::select("SELECT * FROM cliente  WHERE LOWER(LEFT( nome ,1 )) NOT IN ('a','e','i','o','u') order by dataNasc DESC ");
    $clientes =  DB::table('cliente')
                    ->join('endereco', 'endereco.cliente', '=', 'cliente.id')
                    ->where('nome', 'like', '%maria%')
                    ->get();
        return view('cliente.rel2',compact('clientes'));
   }
   else if($filter == 5)
   {
   $clientes=Cliente_model::all();
   return view('cliente.index',compact('clientes'));
   }



   }

//**********relatórios***************

public function teste()
{
//  $clientes = DB::select(' SELECT * FROM cliente order by nome asc ');
//  return view('cliente.index',compact('clientes'));
//$clientes=Cliente_model::all();
//return view('cliente.graficos',compact('clientes'));
//return view('cliente.teste',compact('clientes'));
}

//**********  fim  ***************

    public function create(Request $request)
    {
/*
      $dados = new Cliente_model();
      $dados->nome = $request->input('nome');
      $dados->cpf = $request->input('cpf');
      $dados->dataNasc = $request->input('dataNasc');

      $dados->save();
      return view('cliente.index',compact('clientes'));
*/
    }


    public function store(Request $request)
    {
      $dados = new Cliente_model();
      $dados->nome = $request->input('nome');
      $dados->cpf = $request->input('cpf');
      $dados->dataNasc = $request->input('dataNasc');

      $dados->save();
      return redirect('/clientes')->with('success', 'Cliente adicionado successfully');


    }


    public function show($id)
    {

      //$clientes=Cliente_model::findOrFail($id);
       $clientes = DB::select(" SELECT id,nome,cpf,dataNasc,cep,logradouro,complemento,localidade,uf,tipo,cliente FROM cliente c
inner join endereco e
on c.id = e.cliente
where c.id = $id ");
//print_r($clientes);
     return view('cliente.show',compact('clientes'));

    }


    public function edit($id)
    {
      $clientes = DB::select(" SELECT id,nome,cpf,dataNasc,cep,logradouro,complemento,localidade,uf,tipo,cliente FROM cliente c
inner join endereco e
on c.id = e.cliente
where c.id = $id ");
//print_r($clientes);
    return view('cliente.edit',compact('clientes'));
    }

//executa update!
    public function update(Request $request, $id)
    {

     Cliente_model::findOrFail($id)->update($request->all());
   return redirect('/clientes')->with('success', 'Cliente foi editado!');
    }


    public function destroy($id)
    {
      Cliente_model::findOrFail($id)->delete();
      return redirect('/clientes')->with('success', 'Cliente deleted successfully');
    }
}
