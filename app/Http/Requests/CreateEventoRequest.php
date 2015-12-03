<?php namespace DKEventos\Http\Requests;

use DKEventos\Http\Requests\Request;
use DKEventos\Models\Evento;

class CreateEventoRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return Evento::$rules;
	}

}
