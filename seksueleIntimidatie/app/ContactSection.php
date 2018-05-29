<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactSection extends Model
{
  // https://laravel.com/docs/5.6/eloquent-mutators#accessors-and-mutators
  // Kind of a middleware for setting the section field
  public function setSectionAttribute($value) {
    if ( empty($value) ) {
      $this->attributes['section'] = NULL;
    } else {
      $this->attributes['section'] = $value;
    }
  }
}
