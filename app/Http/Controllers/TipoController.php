<?php namespace DKEventos\Http\Controllers;

use DKEventos\Http\Requests;
use DKEventos\Http\Requests\CreateTipoRequest;
use Illuminate\Http\Request;
use DKEventos\Libraries\Repositories\TipoRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class TipoController extends AppBaseController
{

	/** @var  TipoRepository */
	private $tipoRepository;

	function __construct(TipoRepository $tipoRepo)
	{
		$this->tipoRepository = $tipoRepo;
	}

	/**
	 * Display a listing of the Tipo.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->tipoRepository->search($input);

		$tipos = $result[0];

		$attributes = $result[1];

		return view('tipos.index')
		    ->with('tipos', $tipos)
		    ->with('attributes', $attributes);;
	}

	/**
	 * Show the form for creating a new Tipo.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('tipos.create');
	}

	/**
	 * Store a newly created Tipo in storage.
	 *
	 * @param CreateTipoRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateTipoRequest $request)
	{
        $input = $request->all();

		$tipo = $this->tipoRepository->store($input);

		Flash::message('Tipo saved successfully.');

		return redirect(route('tipos.index'));
	}

	/**
	 * Display the specified Tipo.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$tipo = $this->tipoRepository->findTipoById($id);

		if(empty($tipo))
		{
			Flash::error('Tipo not found');
			return redirect(route('tipos.index'));
		}

		return view('tipos.show')->with('tipo', $tipo);
	}

	/**
	 * Show the form for editing the specified Tipo.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tipo = $this->tipoRepository->findTipoById($id);

		if(empty($tipo))
		{
			Flash::error('Tipo not found');
			return redirect(route('tipos.index'));
		}

		return view('tipos.edit')->with('tipo', $tipo);
	}

	/**
	 * Update the specified Tipo in storage.
	 *
	 * @param  int    $id
	 * @param CreateTipoRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateTipoRequest $request)
	{
		$tipo = $this->tipoRepository->findTipoById($id);

		if(empty($tipo))
		{
			Flash::error('Tipo not found');
			return redirect(route('tipos.index'));
		}

		$tipo = $this->tipoRepository->update($tipo, $request->all());

		Flash::message('Tipo updated successfully.');

		return redirect(route('tipos.index'));
	}

	/**
	 * Remove the specified Tipo from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$tipo = $this->tipoRepository->findTipoById($id);

		if(empty($tipo))
		{
			Flash::error('Tipo not found');
			return redirect(route('tipos.index'));
		}

		$tipo->delete();

		Flash::message('Tipo deleted successfully.');

		return redirect(route('tipos.index'));
	}

}
