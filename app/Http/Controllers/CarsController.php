<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cars;
use App\Http\Resources\Cars as CarsResource;

class CarsController extends Controller
{
  public function index()
  {
    $cars=Cars::all();

    return CarsResource::collection($cars);
    // return response()->json($cars);
  }

  public function create(Request $request)
  {
    $cars=Cars::create($request->all());

    return response()->json($cars);
  }

  public function store(Request $request)
  {

  }

  public function show($id)
  {
    $cars = Cars::find($id);
    if($cars){
        $cars->manufacturer;
      // $cars->manufacturer->name;
      // return new CarsResource($cars);
      return response()->json(['car'=> $cars, 'error' => false]);
    }
    else{
      return response()->json(['error' => true, 'msg' => 'Nu exista']);
    }
  }

  public function edit($id)
  {

  }

  public function update(Request $request,$id)
  {
    if($cars=Cars::find($id)){
      $cars->manufacturer_id=$request->input('manufacturer_id');
      $cars->name=$request->input('name');
      $cars->year_of_production=$request->input('year_of_production');
      $cars->number_of_dors=$request->input('number_of_dors');
      $cars->color=$request->input('color');
      $cars->save();

      return response()->json($cars);
    }else{
        return response()->json('Nu exista');
    }
  }

  public function destroy($id)
  {
    if($cars=Cars::find($id)){
      $cars->delete();
      return new CarsResource($cars);
    }else{
      return response()->json(['error' => 'Nu exista']);
    }
  }




}
