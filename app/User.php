<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'dob',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'dob',
    ];

    // public function getDateFormat()
    // {
    //     return ($this->getConnection() instanceof Illuminate\Database\SqlServerConnection)
    //         ? 'M d Y H:i:s:000A'
    //         : parent::getDateFormat();
    // }
}
