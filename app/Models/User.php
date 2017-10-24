<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected static $tablename = 'users';
    protected $fillable =[
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
    * Method untuk yang mendefinisikan relasi antara model user dan model Role
    */  
    public function roles()
    {
        // return $this->belongsToMany('App\Role')->withTimestamps();
    }

    public function getDataUser()
    {
        $dataRaw = DB::table(self::$tablename)
            ->select(DB::raw('username, email, created_at, updated_at'))->get();
        return $dataRaw;
    }
}
