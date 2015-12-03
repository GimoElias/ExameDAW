<?php

namespace DKEventos\Libraries\Repositories;


use DKEventos\Models\Evento;
use Illuminate\Support\Facades\Schema;

class EventoRepository
{

	/**
	 * Returns all Eventos
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Evento::all();
	}

	public function search($input)
    {
        $query = Evento::query();

        $columns = Schema::getColumnListing('eventos');
        $attributes = array();

        foreach($columns as $attribute){
            if(isset($input[$attribute]))
            {
                $query->where($attribute, $input[$attribute]);
                $attributes[$attribute] =  $input[$attribute];
            }else{
                $attributes[$attribute] =  null;
            }
        };

        return [$query->get(), $attributes];

    }

	/**
	 * Stores Evento into database
	 *
	 * @param array $input
	 *
	 * @return Evento
	 */
	public function store($input)
	{
		return Evento::create($input);
	}

	/**
	 * Find Evento by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Evento
	 */
	public function findEventoById($id)
	{
		return Evento::find($id);
	}

	/**
	 * Updates Evento into database
	 *
	 * @param Evento $evento
	 * @param array $input
	 *
	 * @return Evento
	 */
	public function update($evento, $input)
	{
		$evento->fill($input);
		$evento->save();

		return $evento;
	}
}