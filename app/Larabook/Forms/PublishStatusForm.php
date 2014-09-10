<?php namespace Larabook\Forms;


 use Laracasts\Validation\FormValidator;
/**
 * Class PublishStatusForm
 * @author Alonzo Tolver
 */
class PublishStatusForm extends FormValidator
{

    /**
     * Validation rules for the validation form.
     *
     * @var array
     */
    protected $rules = [
        'body' => 'required'
    ];

}

