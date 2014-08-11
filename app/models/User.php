<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	protected $guarded = array('id');

	protected $fillable = array('name', 'username', 'password','email', 'phone');

	public static $rules = array(
		'name' => 'required|min:5',
		'username' => 'required|alpha_num|min:5',
		'password' => 'required|alpha_num|min:7',		
		'email' => 'required|email',
		'phone' => 'required|numeric|between:8,10'
	);

}
