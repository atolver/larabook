<?php

use Larabook\Users\UserRepository;

class UsersController extends \BaseController {


    /**
     *
     * @var UserRepository
     * @access private
    */
    protected $userRepository;


	/**
	 * Constructor
	 *
     * @param UserRepository $userRepository description
	 */
    public function __construct(UserRepository $userRepository)
	{
        $this->userRepository = $userRepository;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $users = $this->userRepository->getPaginated();

        return View::make('users.index')->withUsers($users);
	}


    /**
     * show
     *
     * @param mixed $username description
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function show($username)
    {
        $user = $this->userRepository->findByUsername($username);
        return View::make('users.show')->withUser($user);
    }
}
