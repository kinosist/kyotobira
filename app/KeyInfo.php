<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class KeyInfo extends Model
{
    //
    protected $table = 'keyinfos';
	protected $dates = ['start_service_date','end_service_date','created_at','updated_at'];
    public function lockname()
    {
        return $this->hasOne('App\LockInfo', 'id', 'lockinfoid');
    }
    piblic static function getDeviceIp($keyid){
		$sql = "
	    	select
			deviceinfos.deviceip
			from
			keyinfos
			inner join lockinfos ON keyinfos.lockinfoid = lockinfos.id AND lockinfos.enabled = 1
			inner join deviceinfos ON lockinfos.deviceid = deviceinfos.id AND deviceinfos.enabled = 1
			where
			keyinfos.keyid = ?
			AND keyinfos.enabled = 1
		";
		return DB::select($sql[$keyid]);
    }
}
