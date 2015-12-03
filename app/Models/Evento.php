<?php namespace DKEventos\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    
	public $table = "eventos";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "tipo_id",
		"titulo",
		"descricao",
		"local",
		"programa"
	];

	public static $rules = [
	    "tipo_id" => "required",
		"titulo" => "required",
		"descricao" => "max:400",
		"local" => "max:400",
		"programa" => "max:500"
	];

}
