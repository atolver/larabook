<?php
/**
 * UserHasRegistered File Doc Comment
 *
 * PHP version 5
 *
 * @category UserHasRegistered
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.laracbook.app
 *
 */

namespace Larabook\Registration\Events;

use Larabook\Users\User;

/**
 * Class UserHasRegistered
 *
 * @category UserHasRegistered
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.larabook.app
 */
class UserHasRegistered
{

    /**
     * @var User $user
     */
    public $user;

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
