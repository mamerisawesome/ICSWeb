<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Group extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    public $timestamps = false;
    protected $fillable = ['courseTitle', 'section', 'classSize', 'accessCode'];

    public static $auth_rules = [
        'accessCode' => 'required'
    ];

    public static $rules = [
        'courseTitle' => 'required',
        'section' => 'required',
        'classSize' => 'required',
        'accessCode' => 'required'
    ];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'groups';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('accessCode', 'remember_token');

//    public function isValid()
//    {
//        $validation = Validator::make($this->attributes, static::$rules);
//        if($validation->passes())	return true;
//
//        $this->messages = $validation->messages();
//        return false;
//    }

}
