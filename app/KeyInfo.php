<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeyInfo extends Model
{
    //
    protected $table = 'keyinfos';
	protected $dates = ['start_service_date','end_service_date','created_at','updated_at'];
}
