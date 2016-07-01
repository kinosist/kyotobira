<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class DeviceInfo extends Model
{
    //
    protected $table = 'deviceinfos';
	protected $dates = ['created_at','updated_at'];
	
	// 未使用のdeviceのみを一覧で取得
	public static function getUnused(){
		return DB::select('
			select
			t1.id,
			t1.devicename
			from
			( select
			`deviceinfos`.`id`,
			`deviceinfos`.`devicename`,
			`lockinfos`.`id` as lockid
			from
			`deviceinfos`
			left join `lockinfos` on `deviceinfos`.`id` = `lockinfos`.`deviceid`
			) t1
			where
			lockid is null
			order by t1.id asc
		');
	}
	
}
