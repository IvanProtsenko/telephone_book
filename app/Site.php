<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
  protected $table = 'sites';

  // https://laravel.com/docs/5.6/eloquent-relationships
  public function contact()
  {
      return $this->hasOne('App\Contact', 'contact_id', 'id');
  }
}
