<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    public $timestamps = false;
    protected $fillable = ['type', 'username', 'password', 'firstName', 'middleName', 'lastName', 'birthdate', 'sex', 'email', 'studentNumber', 'employeeNumber', 'room', 'academicPosition'];

    public static $rules = [
        'type'=>'required',
        'username' => 'required',
        'password' => 'required',
        'firstName' => 'required',
        'middleName' => 'required',
        'lastName' => 'required',
        'birthdate' => 'required',
        'sex' => 'required',
        'email' => 'required',
        'studentNumber'=>'required',
        'employeeNumber'=>'required',
        'room'=>'required',
        'academicPosition'=>'required'
    ];

    public $messages;

    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'accounts';

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
