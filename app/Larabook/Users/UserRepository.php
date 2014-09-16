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

    /**
     * getPaginated
     *
     * @param mixed $howMany description  = 25
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function getPaginated($howMany = 25)
    {
        return User::orderBy('username', 'asc')->simplePaginate($howMany);
    }

    /**
     * findByUsername
     *
     * @param mixed $username description
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function findByUsername($username)
    {
        return User::with('statuses')->whereUsername($username)->first();
    }

    /**
     * findById
     *
     * @param mixed $id description
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function findById($id)
    {
        return User::findOrFail($id);
    }

    /**
     * follow
     *
     * @param mixed $userIdToFollow description
     * @param User $user description
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function follow($userIdToFollow, User $user)
    {
        return $user->followedUsers()->attach($userIdToFollow);
    }

    /**
     * unfollow
     *
     * @param mixed $userIdToFollow description
     * @param User $user description
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function unfollow($userIdToUnfollow, User $user)
    {
        return $user->followedUsers()->detach($userIdToUnfollow);
    }
}

