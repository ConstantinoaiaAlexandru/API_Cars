<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Cars extends Resource
{
  public function toArray($request)
  {
    // return parent::toArray($request);
    return [
      'id'=>$this->id,
      'manufacturer_name'=>$this->manufacturer->name,
      'name'=>$this->name,
      'year_of_production'=>$this->year_of_production,
      'number_of_dors'=>$this->number_of_dors,
      'color'=>$this->color,
    ];
  }
}
