<?php
/**
 * User File Doc Comment
 *
 * PHP version 5
 *
 * @category User
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.laracbook.app
 *
 */
namespace Larabook\Users;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Eloquent;
use Hash;
use Laracasts\Commander\Events\EventGenerator;
use Larabook\Registration\Events\UserHasRegistered;
use Laracasts\Presenter\PresentableTrait;

/**
 * User Class Doc Comment
 *
 * @category User
 * @package  MyPackage
 * @author   Alonzo Tolver <alonzotolver@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     www.laracbook.app
 *
 */
class User extends Eloquent implements UserInterface, RemindableInterface
{

    use UserTrait, RemindableTrait, EventGenerator, PresentableTrait, FollowableTrait;

    /**
     * Which fields are fillable.
     *
     * @var array
     */
    protected $fillable = ['username', 'email', 'password'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = 'users';

    /**
     * Path to the presenter for the user.
     *
     * @var string
     */
    protected $presenter = 'Larabook\Users\UserPresenter';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    /**
     * setPasswordAttribute
     *
     * @param mixed $password User Password
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    /**
     * statuses
     *
     *
     * @return mixed
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function statuses()
    {
        return $this->hasMany('Larabook\Statuses\Status')->latest();
    }

    /**
     * Register a user
     *
     * @param mixed $username Username
     * @param mixed $email    Email
     * @param mixed $password Password
     *
     * @return static
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public static function register($username, $email, $password)
    {
        $user = new static(compact('username', 'email', 'password'));

        $user->raise(new UserHasRegistered($user));

        return $user;
    }

    /**
     * is
     *
     * @param $user description
     *
     * @return bool
     * @author Alonzo Tolver <alonzotolver@gmail.com>
     *
     **/
    public function is($user)
    {
        if (is_null($user)) return false;

        return $this->username == $user->username;
    }


}
