<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeviceInfo extends Model
{
    //
    protected $table = 'deviceinfos';
	protected $dates = ['created_at','updated_at'];
    public function keydata()
    {
        return $this->hasOne('App\KeyInfo', 'id', 'keyinfoid');
    }
}
