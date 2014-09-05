<?php
/**
 * UserRepository File Doc Comment
 *
 * PHP version 5
 *
 * @category UserRepository
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.laracbook.app
 *
 */

namespace Larabook\Users;

/**
 * Class UserRepository
 *
 * @category UserRepositoryUserRepository
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.example.com
 */
class UserRepository
{

    /**
     * Persist a user
     *
     * @param User $user User to save
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function save(User $user)
    {
        return $user->save();
    }

}

