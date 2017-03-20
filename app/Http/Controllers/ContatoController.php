<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
    	/*
    	$contatos = [
    		["nome" => "Maria", "telefone" => "5454545"],
    		["nome" => "Pedro", "telefone" => "7878788"]
    	];
    	*/	
    	$contatos = [
    		(object) ["nome" => "Maria", "telefone" => "5454545"],
    		(object) ["nome" => "Pedro", "telefone" => "7878788"]
    	];	
    	
    	$contato = new Contato();
    	$con = $contato->lista();
    	dd($con->nome);

    	return view('contato.index', compact('contatos'));


    }
}
