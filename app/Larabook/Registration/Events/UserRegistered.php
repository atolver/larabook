<?php
/**
 * UserRegistered File Doc Comment
 *
 * PHP version 5
 *
 * @category UserRegistered
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.laracbook.app
 *
 */

namespace Larabook\Registration\Events;

use Larabook\Users\User;

/**
 * Class UserRegistered
 *
 * @category UserRegistered
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.larabook.app
 */
class UserRegistered
{

    protected $user;

    /**
     * Constructor
     *
     * @param User $user The User
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

}
