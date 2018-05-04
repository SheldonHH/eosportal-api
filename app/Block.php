<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    public function producer()
    {
        return $this->belongsTo('App\Producer');
    }

}
