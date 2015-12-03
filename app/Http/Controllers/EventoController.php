<?php namespace DKEventos\Http\Controllers;

use DKEventos\Http\Requests;
use DKEventos\Http\Requests\CreateEventoRequest;
use Illuminate\Http\Request;
use DKEventos\Libraries\Repositories\EventoRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class EventoController extends AppBaseController
{

	/** @var  EventoRepository */
	private $eventoRepository;

	function __construct(EventoRepository $eventoRepo)
	{
		$this->eventoRepository = $eventoRepo;
	}

	/**
	 * Display a listing of the Evento.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->eventoRepository->search($input);

		$eventos = $result[0];

		$attributes = $result[1];

		return view('eventos.index')
		    ->with('eventos', $eventos)
		    ->with('attributes', $attributes);;
	}

	/**
	 * Show the form for creating a new Evento.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('eventos.create');
	}

	/**
	 * Store a newly created Evento in storage.
	 *
	 * @param CreateEventoRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateEventoRequest $request)
	{
        $input = $request->all();

		$evento = $this->eventoRepository->store($input);

		Flash::message('Evento saved successfully.');

		return redirect(route('eventos.index'));
	}

	/**
	 * Display the specified Evento.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$evento = $this->eventoRepository->findEventoById($id);

		if(empty($evento))
		{
			Flash::error('Evento not found');
			return redirect(route('eventos.index'));
		}

		return view('eventos.show')->with('evento', $evento);
	}

	/**
	 * Show the form for editing the specified Evento.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$evento = $this->eventoRepository->findEventoById($id);

		if(empty($evento))
		{
			Flash::error('Evento not found');
			return redirect(route('eventos.index'));
		}

		return view('eventos.edit')->with('evento', $evento);
	}

	/**
	 * Update the specified Evento in storage.
	 *
	 * @param  int    $id
	 * @param CreateEventoRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateEventoRequest $request)
	{
		$evento = $this->eventoRepository->findEventoById($id);

		if(empty($evento))
		{
			Flash::error('Evento not found');
			return redirect(route('eventos.index'));
		}

		$evento = $this->eventoRepository->update($evento, $request->all());

		Flash::message('Evento updated successfully.');

		return redirect(route('eventos.index'));
	}

	/**
	 * Remove the specified Evento from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$evento = $this->eventoRepository->findEventoById($id);

		if(empty($evento))
		{
			Flash::error('Evento not found');
			return redirect(route('eventos.index'));
		}

		$evento->delete();

		Flash::message('Evento deleted successfully.');

		return redirect(route('eventos.index'));
	}

}
