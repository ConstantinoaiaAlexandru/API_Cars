<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $fillable =[
      'name','manufacturer_id','year_of_production','number_of_dors','color',
    ];

    public function manufacturer()
    {
      return $this->belongsTo('App\Manufacturers');

    }
}
