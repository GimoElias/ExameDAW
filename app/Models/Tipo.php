<?php namespace DKEventos\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    
	public $table = "tipos";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "name"
	];

	public static $rules = [
	    "name" => "required"
	];

}
