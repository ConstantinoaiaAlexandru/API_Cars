<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Manufacturers extends Resource
{
  public function toArray($request)
  {
    return parent::toArray($request);

    // return [
    //   'id'=>$this->id,
    //   'name'=>$this->name,
    // ];
  }
}
