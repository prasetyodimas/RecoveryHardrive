<?php
namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class MemberRecovery extends Model{

	public $timestamps		= false;
	protected $table 		= 'member_recovery';
	protected $primaryKey   = 'userid';
	protected $fillable     = ['name_user','pass_user','role_user','blokir'];


	public static function getMember(){
		$member = DB::table('member_recovery')->get();
		return $member;
	}
}
