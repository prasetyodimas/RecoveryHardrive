<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    public $primaryKey 	 = 'id_contact_us';

    protected $table = 'contact_us';
    protected $fillable	 = ['contact_name','contact_mail','contact_notelp','contact_adress'];
}
