<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // https://laravel.com/docs/5.6/eloquent-relationships
    public function phones()
    {
        return $this->hasMany('App\Phone', 'contact_id', 'id');
    }
    public function sites()
    {
        return $this->hasMany('App\Site', 'contact_id','id');
    }
}
