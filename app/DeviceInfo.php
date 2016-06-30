<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeviceInfo extends Model
{
    //
    protected $table = 'deviceinfos';
	protected $dates = ['created_at','updated_at'];
	
	// 未使用のdeviceのみを一覧で取得
	public function getUnused(){
		$this->quiery()->
		
	}
	
}
