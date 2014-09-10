<?php

use Larabook\Core\CommandBus;
use Larabook\Statuses\PublishStatusCommand;
use Larabook\Statuses\StatusRepository;
use Larabook\Forms\PublishStatusForm;

class StatusController extends \BaseController {

    use CommandBus;


    /**
     *
     * @var PublishStatusForm
     * @access private
    */
    protected $publishStatusForm;

    /**
     *
     * @var StatusRepository
     * @access private
    */
    protected $statusRepository;


    /**
     * Constructor
     *
     * @param PublishStatusForm $publishStatusForm description
     * @param StatusRepository $statusRepository description
     */
    function __construct(PublishStatusForm $publishStatusForm, StatusRepository $statusRepository)
    {
        $this->publishStatusForm = $publishStatusForm;
        $this->statusRepository = $statusRepository;
    }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $statuses = $this->statusRepository->getAllForUser(Auth::user()->id);

        return View::make('statuses.index', compact('statuses'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
     * Save a new status
	 *
	 * @return Response
	 */
	public function store()
	{
        $this->publishStatusForm->validate(Input::only('body'));

        $this->execute(
            new PublishStatusCommand(Input::get('body'), Auth::user()->id)
        );

        Flash::message('Your status has been updated!');

        return Redirect::refresh();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}