<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeyLog extends Model
{
    //
    protected $table = 'keylogs';
    public function keyinfo(){
        return $this->hasOne('App\KeyInfo', 'keyid', 'keyid');
    }
}
