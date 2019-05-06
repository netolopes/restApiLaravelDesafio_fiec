<?php

namespace App\Http\Controllers;
use App\Endereco_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cliente_model;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Charts;


class EnderecoController extends Controller
{

    public function index()
    {

    //  $clientesx = DB::select("SELECT c.nome,e.tipo FROM  cliente c left join endereco e on c.id = e.cliente GROUP by c.nome,e.tipo order by c.id asc");

    $enderecos = Endereco_model::all();
    $clientes = Cliente_model::all();
      return view('endereco.index',compact(['clientes','enderecos']));
      //charts
      /*
      Charts::multi('line', 'highcharts')
    ->setColors(['#ff0000', '#00ff00', '#0000ff'])
    ->setLabels(['One', 'Two', 'Three'])
    ->setDataset('Test 1', [1,2,3])
    ->setDataset('Test 2', [0,6,0])
    ->setDataset('Test 3', [3,4,1]);
    */


    }

//TESTAR URL POSTMAN
//somente endereco
//http://127.0.0.1:8000/api/end/?cod_cep=60731532
//endereco cm tipo e cliente
//http://127.0.0.1:8000/api/end/?cod_cep=60731532&tipo=1&cliente=1
     public function create(Request $request)
     {


    $cod_cep = isset($_GET['cod_cep']) ? $_GET['cod_cep'] : '';

    $tipo = isset($_GET['tipo']) ? $_GET['tipo'] : '';

    $cliente = isset($_GET['cliente']) ? $_GET['cliente'] : '';



    $client = new \GuzzleHttp\Client();
    //Create a request
    $request = $client->get('https://sistemas.sfiec.org.br/cep/?cep='.$cod_cep);
    // Get the actual response without headers
    $dados = $request->getBody()->getContents();

  //  var_dump($dados->cep);

    $statusCode = $request->getStatusCode();

    $header = array (
                    'Content-Type' => 'application/json; charset=UTF-8',
                    'charset' => 'utf-8'
                );


//convert string json para obj json
$obj  = json_decode($dados);
 //var_dump($dados->uf);

//cria obj endereco e passa valores api fiec da string json
       $dados = new Endereco_model();
       $dados->cep = $obj->cep;
       $dados->logradouro = $obj->logradouro;
       $dados->complemento = $obj->complemento;
       $dados->localidade = $obj->localidade;
       $dados->uf = $obj->uf;

       if($tipo){
         $dados->tipo = $tipo;
       }


      if($cliente){
         $dados->cliente =  $cliente;
      }


       $dados->unidade = $obj->unidade;
       $dados->ibge = $obj->ibge;
       $dados->gia = $obj->gia;
       $dados->bairro = $obj->bairro;

       //salva no banco
       $dados->save();
       //mostra valores string json
       return response()->json(json_decode($dados) , $statusCode, $header, JSON_UNESCAPED_UNICODE);


     }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
