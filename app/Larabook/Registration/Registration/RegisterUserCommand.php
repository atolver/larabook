<?php
/**
 * RegisterUserCommand File Doc Comment
 *
 * PHP version 5
 *
 * @category RegisterUserCommand
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.laracbook.app
 *
 */
namespace Larabook\Registration;

/**
 * Class RegisterUserCommand
 *
 * @category RegisterUserCommand
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.laracbook.app
 */
class RegisterUserCommand
{

	public $email;
	public $username;
	public $password;

    /**
     * Constructor
     *
     * @param mixed $email    Email
     * @param mixed $username Username
     * @param mixed $password Password
     */
    public function __construct($email, $username, $password)
    {
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
    }

}

