<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LockInfo extends Model
{
    //
    protected $table = 'lockinfos';
//    public $timestamps = false;
	protected $dates = ['start_use_date','end_use_date','created_at','updated_at'];
	
	public function device(){
        return $this->hasOne('App\DeviceInfo', 'id', 'deviceid');
	}
	
	public function useDeviceId($id){
		// 既に設定されたdevice idかどうかを調べます
		$result = $this->query()->where('deviceid','=',$id)->get();
		return $result;
	}
}
