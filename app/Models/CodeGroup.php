<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CodeGroup extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    public $primaryKey 	 = 'code_id';

    protected $table = 'code_group';
    protected $fillable	 = ['code_group','code_name'];
}
