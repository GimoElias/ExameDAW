<?php

namespace DKEventos\Libraries\Repositories;


use DKEventos\Models\ParticipantesEvento;
use Illuminate\Support\Facades\Schema;

class ParticipantesEventoRepository
{

	/**
	 * Returns all ParticipantesEventos
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return ParticipantesEvento::all();
	}

	public function search($input)
    {
        $query = ParticipantesEvento::query();

        $columns = Schema::getColumnListing('participantes_eventos');
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
	 * Stores ParticipantesEvento into database
	 *
	 * @param array $input
	 *
	 * @return ParticipantesEvento
	 */
	public function store($input)
	{
		return ParticipantesEvento::create($input);
	}

	/**
	 * Find ParticipantesEvento by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|ParticipantesEvento
	 */
	public function findParticipantesEventoById($id)
	{
		return ParticipantesEvento::find($id);
	}

	/**
	 * Updates ParticipantesEvento into database
	 *
	 * @param ParticipantesEvento $participantesEvento
	 * @param array $input
	 *
	 * @return ParticipantesEvento
	 */
	public function update($participantesEvento, $input)
	{
		$participantesEvento->fill($input);
		$participantesEvento->save();

		return $participantesEvento;
	}
}