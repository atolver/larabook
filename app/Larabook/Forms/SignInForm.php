<?php namespace Larabook\Forms;


 use Laracasts\Validation\FormValidator;
/**
 * Class SignInForm
 * @author Alonzo Tolver
 */
class SignInForm extends FormValidator
{

    /**
     * Validation rules for the validation form.
     *
     * @var array
     */
    protected $rules = [
        'email' => 'required',
        'password' => 'required'
    ];

}

