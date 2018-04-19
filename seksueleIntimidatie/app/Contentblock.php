<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contentblock extends Model
{
    //
    public function websection()
    {
        return $this->belongsTo('App\Websection');
    }
}
