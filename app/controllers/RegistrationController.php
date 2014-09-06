<?php
/**
 * RegistrationController File Doc Comment
 *
 * PHP version 5
 *
 * @category RegistrationController
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.laracbook.app
 *
 */

use Larabook\Forms\RegistrationForm;
use Larabook\Registration\RegisterUserCommand;
use Larabook\Core\CommandBus;

/**
 * RegistrationController Class Doc Comment
 *
 * @category RegistrationController
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.laracbook.app
 *
 */
class RegistrationController extends \BaseController
{

    use CommandBus;

    /**
     * _registrationForm
     *
     * @var RegistrationForm
     * @access private
     */
    private $_registrationForm;

    /**
     * Constructor
     *
     * @param RegistrationForm $registrationForm Registration form
     */
    public function __construct(RegistrationForm $registrationForm)
    {
        $this->_registrationForm = $registrationForm;
    }

    /**
     * Show the form to register the user.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('registration.create');
    }

    /**
     * Create a new Larabook user.
     *
     * @return string
     */
    public function store()
    {
        $this->_registrationForm->validate(Input::all());

        extract(Input::only('email', 'username', 'password'));

        $user = $this->execute(
            new RegisterUserCommand($email, $username, $password)
        );

        Auth::login($user);

        Flash::message('Glad to you as a new Larabook member!');

        return Redirect::home();
    }

}
