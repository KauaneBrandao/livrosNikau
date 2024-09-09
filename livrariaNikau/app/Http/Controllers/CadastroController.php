<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
  public function insert(Request $request)
  {
    $request->validate(
      [
        'nome'  => 'required||max:255|min:5', //Requer o campo, ao menos 5 caracteres e no máximo 255
        'email' => 'required|email', //Requer o campo e deve ser um e-mail no formato correto
        'datanascimento' => 'required'
      ],
      [
        'nome.required'  => 'Digite um nome para continuar', //Criamos uma mensagem personalizada para quando o tipo required não for satisfeito 
        'email.required' => 'Digite um e-mail válido', //Criamos uma mensagem personalizada para quando o tipo required não for satisfeito 
        'datanascimento.required' => 'Digite uma data de nascimento' //Criamos uma mensagem personalizada para quando o tipo required não for satisfeito 
      ]
    );

    //criar informações vinculada ao Model para o banco de dados//
    User::create([
      'nome' => $request->nome,
      'email' => $request->email,
      'datanascimento' => $request->datanascimento
    ]);
    echo " Cadastrado com sucessso";
  }
}
