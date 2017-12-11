<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    public $primaryKey 	 = 'id';
    
	protected $table = 'service';
	protected $fillable  = ['service_title','service_description','service_picture'];

}
