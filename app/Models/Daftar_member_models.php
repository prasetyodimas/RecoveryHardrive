<?php
namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class Daftar_member_models extends Model{

	public $timestamps			 = false;
	protected $table 			 = 'member_recovery';
	protected $primaryKey   	 = 'id_member';
	protected $fillable          = ['nama_member','jenis_kelamin','notelp_member'];


	public static function get_data(){
		
		$get_user_from_table = DB::table('member_recovery')->get();
		return $get_user_from_table;
	}
}
