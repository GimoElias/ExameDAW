<?php namespace DKEventos\Models;

use Illuminate\Database\Eloquent\Model;

class ParticipantesEvento extends Model
{
    
	public $table = "participantes_eventos";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "orador",
		"palestrante",
		"convidados",
		"platea"
	];

	public static $rules = [
	    "orador" => "required",
		"palestrante" => "required",
		"convidados" => "required",
		"platea" => "required"
	];
	
	//    vamos listar os nossos user
    public static function participante(){
		return DB::table('participantes_eventos')
			->join('participantes','participantes.id','=','participantes_eventos.orador')
			->select('participantes_eventos.*', 'participantes.participante')
			->get();
	}

}
