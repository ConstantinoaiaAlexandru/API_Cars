<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturers extends Model
{
    protected $fillable =[
      'name',
    ];

    public function cars()
    {
      return $this->hasMany('App\Cars');
    }
}
