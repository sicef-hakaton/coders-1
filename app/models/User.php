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
	protected $table = 'korisnici';
        protected $primaryKey = "ID";

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
        
        public function smer(){
            return $this->belongsTo('Smer','smerID');
        }
        
        public function racuni(){
            return $this->hasMany('Racun','StudentID');
        }
        
        public function prijavljeniIspiti(){
            return $this->hasMany('Prijava','studentID');
        }

}
