<?php namespace Larabook\Forms;


 use Laracasts\Validation\FormValidator;
/**
 * Class RegistrationForm
 * @author Alonzo Tolver
 */
class RegistrationForm extends FormValidator
{

    /**
     * Validation rules for the validation form.
     *
     * @var array
     */
    protected $rules = [
        'username' => 'required|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed'
    ];

}

