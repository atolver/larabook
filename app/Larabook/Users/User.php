<?php

namespace Larabook\Users;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Eloquent;
use Hash;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

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
        return new static(compact('username', 'email', 'password'));
    }

}
