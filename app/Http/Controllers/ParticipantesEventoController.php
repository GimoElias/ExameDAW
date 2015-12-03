<?php namespace DKEventos\Http\Controllers;

use DKEventos\Http\Requests;
use DKEventos\Http\Requests\CreateParticipantesEventoRequest;
use Illuminate\Http\Request;
use DKEventos\Libraries\Repositories\ParticipantesEventoRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class ParticipantesEventoController extends AppBaseController
{

	/** @var  ParticipantesEventoRepository */
	private $participantesEventoRepository;

	function __construct(ParticipantesEventoRepository $participantesEventoRepo)
	{
		$this->participantesEventoRepository = $participantesEventoRepo;
	}

	/**
	 * Display a listing of the ParticipantesEvento.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->participantesEventoRepository->search($input);

		$participantesEventos = $result[0];

		$attributes = $result[1];

		return view('participantesEventos.index')
		    ->with('participantesEventos', $participantesEventos)
		    ->with('attributes', $attributes);;
	}

	/**
	 * Show the form for creating a new ParticipantesEvento.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('participantesEventos.create');
	}

	/**
	 * Store a newly created ParticipantesEvento in storage.
	 *
	 * @param CreateParticipantesEventoRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateParticipantesEventoRequest $request)
	{
        $input = $request->all();

		$participantesEvento = $this->participantesEventoRepository->store($input);

		Flash::message('ParticipantesEvento saved successfully.');

		return redirect(route('participantesEventos.index'));
	}

	/**
	 * Display the specified ParticipantesEvento.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$participantesEvento = $this->participantesEventoRepository->findParticipantesEventoById($id);

		if(empty($participantesEvento))
		{
			Flash::error('ParticipantesEvento not found');
			return redirect(route('participantesEventos.index'));
		}

		return view('participantesEventos.show')->with('participantesEvento', $participantesEvento);
	}

	/**
	 * Show the form for editing the specified ParticipantesEvento.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$participantesEvento = $this->participantesEventoRepository->findParticipantesEventoById($id);

		if(empty($participantesEvento))
		{
			Flash::error('ParticipantesEvento not found');
			return redirect(route('participantesEventos.index'));
		}

		return view('participantesEventos.edit')->with('participantesEvento', $participantesEvento);
	}

	/**
	 * Update the specified ParticipantesEvento in storage.
	 *
	 * @param  int    $id
	 * @param CreateParticipantesEventoRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateParticipantesEventoRequest $request)
	{
		$participantesEvento = $this->participantesEventoRepository->findParticipantesEventoById($id);

		if(empty($participantesEvento))
		{
			Flash::error('ParticipantesEvento not found');
			return redirect(route('participantesEventos.index'));
		}

		$participantesEvento = $this->participantesEventoRepository->update($participantesEvento, $request->all());

		Flash::message('ParticipantesEvento updated successfully.');

		return redirect(route('participantesEventos.index'));
	}

	/**
	 * Remove the specified ParticipantesEvento from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$participantesEvento = $this->participantesEventoRepository->findParticipantesEventoById($id);

		if(empty($participantesEvento))
		{
			Flash::error('ParticipantesEvento not found');
			return redirect(route('participantesEventos.index'));
		}

		$participantesEvento->delete();

		Flash::message('ParticipantesEvento deleted successfully.');

		return redirect(route('participantesEventos.index'));
	}

}
