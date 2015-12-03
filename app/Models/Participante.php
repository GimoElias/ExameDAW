<?php namespace DKEventos\Models;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    
	public $table = "participantes";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "nome",
		"apelido",
		"grauacademico",
		"empresa",
		"datanascimento",
		"sexo",
		"telefone",
		"email"
	];

	public static $rules = [
	    "nome" => "required",
		"apelido" => "required",
		"grauacademico" => "required",
		"empresa" => "required",
		"datanascimento" => "required",
		"sexo" => "required",
		"telefone" => "max:10",
		"email" => "required|unique:participantes"
	];

}
