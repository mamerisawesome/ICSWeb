<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Student extends Eloquent implements UserInterface, RemindableInterface {

    public $timestamps = false;
    protected $fillable = ['username', 'password', 'firstName', 'middleName', 'lastName', 'birthdate', 'sex', 'email', 'studentNumber', 'accessCode'];

    public static $rules = [
        'username' => 'required',
        'password' => 'required',
        'firstName' => 'required',
        'middleName' => 'required',
        'lastName' => 'required',
        'birthdate' => 'required',
        'sex' => 'required',
        'email' => 'required',
        'studentNumber' => 'required',
        'accessCode' => 'required'
    ];

    public $messages;

    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'students';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    public function isValid()
    {
        $validation = Validator::make($this->attributes, static::$rules);
        if($validation->passes())	return true;

        $this->messages = $validation->messages();
        return false;
    }

}
