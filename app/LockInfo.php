<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LockInfo extends Model
{
    //
    protected $table = 'lockinfos';
//    public $timestamps = false;
	protected $dates = ['start_use_date','end_use_date','created_at','updated_at'];
}
