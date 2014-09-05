<?php
/**
 * RegisterUserCommandHandler File Doc Comment
 *
 * PHP version 5
 *
 * @category RegisterUserCommandHandler
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.laracbook.app
 *
 */
namespace Larabook\Registration;

use Laracasts\Commander\CommandHandler;
use Larabook\Registration\RegisterUserCommand;
use Larabook\Users\UserRepository;
use Larabook\Users\User;

/**
 * Class RegisterUserCommandHandler
 *
 * @category RegisterUserCommandHandler
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.example.com
 */
class RegisterUserCommandHandler implements CommandHandler
{

	protected $repository;

    /**
     * Constructor
     *
     * @param mixed UserRepository $repository
     *
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Handles the command
     *
     * @param mixed $command Command
     *
     * @return User
     * @author Alonzo Tolver
     *
     **/
    public function handle($command)
    {
        /**
         * @var User
         */
        $user = User::register(
            $command->username, $command->email, $command->password
        );

        $this->repository->save($user);

        return $user;
    }

}
