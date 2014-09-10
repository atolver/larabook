<?php
/**
 * StatusRepository File Doc Comment
 *
 * PHP version 5
 *
 * @category StatusRepository
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     larabook.app
 *
 */
namespace Larabook\Statuses;

use Larabook\Users\User;

/**
 * Class StatusRepository
 *
 * @category StatusRepository
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     larabook.app
 */
class StatusRepository
{

    /**
     * getAll
     *
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function getAllForUser($userId)
    {
        return User::find($userId)->statuses()->with('user')->latest()->get();
    }

    /**
     * save
     *
     * @param Status $status description
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function save(Status $status, $userId)
    {
        return User::findOrFail($userId)
            ->statuses()
            ->save($status);
    }
}
