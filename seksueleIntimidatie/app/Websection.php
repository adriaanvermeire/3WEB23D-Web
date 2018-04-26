<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Websection extends Model
{
    //
    public function contentblocks()
    {
        return $this->hasMany('App\Contentblock');
    }

    protected $fillable = ['name'];
    protected $table = 'websection';
}
