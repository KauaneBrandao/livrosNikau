<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class livrosController extends Controller
{
 public function index(){
    $nome = "Gomez";
    $idade = 29;
    
    $arr = [10,20,30,40,50];
    $nomes = ["Matheus", "João", "Guilherme", "Douglas"];

    return view('welcome', 
    ['nome' => $nome,
      'idade' => $idade,
      'arr' => $arr,
      'nomes' => $nomes
    ]);
 }

 public function create(){
  return view('events.create');
 }
}