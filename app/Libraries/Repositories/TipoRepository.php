<?php

namespace DKEventos\Libraries\Repositories;


use DKEventos\Models\Tipo;
use Illuminate\Support\Facades\Schema;

class TipoRepository
{

	/**
	 * Returns all Tipos
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Tipo::all();
	}

	public function search($input)
    {
        $query = Tipo::query();

        $columns = Schema::getColumnListing('tipos');
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
	 * Stores Tipo into database
	 *
	 * @param array $input
	 *
	 * @return Tipo
	 */
	public function store($input)
	{
		return Tipo::create($input);
	}

	/**
	 * Find Tipo by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Tipo
	 */
	public function findTipoById($id)
	{
		return Tipo::find($id);
	}

	/**
	 * Updates Tipo into database
	 *
	 * @param Tipo $tipo
	 * @param array $input
	 *
	 * @return Tipo
	 */
	public function update($tipo, $input)
	{
		$tipo->fill($input);
		$tipo->save();

		return $tipo;
	}
}