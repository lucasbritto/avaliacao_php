<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
// use \Auth;

class cadastroController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $dados = Cliente::all();

        return view('home' , compact('dados'));

    }

    public function form(){      

        return view('cadastrar');

    }

    public function criar(Request $req){
        $dados = $req->all();

        if($dados['cidade'] == 'SP' && $dados['rg'] == null ){
           
            return "Cliente de SP é obrigatorio o RG";

        }else if($dados['cidade'] == 'BA'){
            $data = $dados['nascimento'];
   
            // Separa em dia, mês e ano
            list($ano, $mes, $dia) = explode('-', $data);
           
            // Descobre que dia é hoje e retorna a unix timestamp
            $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
            // Descobre a unix timestamp da data de nascimento do fulano
            $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
           
            // Depois apenas fazemos o cálculo já citado :)
            $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
            // return $data . $idade . $nascimento ;
            
            if($idade < 18){
                return "Cliente de BA, apenas acima dos 18 anos";
            }
        
        }else{
            Cliente::create($dados);
            return redirect()->route('home.cadastro');

        }  
    }

    public function editar($id){
        $registro = Cliente::find($id);
        return view('editar' , compact('registro'));
    }


    public function atualizar(Request $req , $id){
        $dados = $req->all();
      

        if($dados['cidade'] == 'SP' && $dados['rg'] == null ){
           
            return "Cliente de SP é obrigatorio o RG";

        }else if($dados['cidade'] == 'BA'){
            $data = $dados['nascimento'];
   
            // Separa em dia, mês e ano
            list($ano, $mes, $dia) = explode('-', $data);
           
            // Descobre que dia é hoje e retorna a unix timestamp
            $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
            // Descobre a unix timestamp da data de nascimento do fulano
            $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
           
            // Depois apenas fazemos o cálculo já citado :)
            $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
            // return $data . $idade . $nascimento ;
            
            if($idade < 18){
                return "Cliente de BA, apenas acima dos 18 anos";
            }
        
        }else{
            Cliente::find($id)->update($dados);
            return redirect()->route('home.cadastro');

        }        
    }

    public function deletar($id){
        Cliente::find($id)->delete();
        
         return redirect()->route('home.cadastro');
    }
}
