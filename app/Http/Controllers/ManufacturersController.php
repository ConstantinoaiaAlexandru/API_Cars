<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Manufacturers;
use App\Cars;
use App\Http\Resources\Manufacturers as ManufacturersResource;

class ManufacturersController extends Controller
{
  public function index()
  {
    $manufacturers=Manufacturers::all();

    return ManufacturersResource::collection($manufacturers);
    // return response()->json($cars);
  }

  public function create(Request $request)
  {
    $manufacturers=Manufacturers::create($request->all());

    return response()->json($manufacturers);
  }

  public function store(Request $request)
  {

  }

  public function show($id)
  {
    // $manufacturers=Manufacturers::findOrFail($id);
    // $test=Manufacturers::where('id',$id)->get();
    // dd($test);
    if($manufacturers=Manufacturers::find($id)){
      return new ManufacturersResource($manufacturers);
    }
    else {
      return response()->json('Nu exista');
    }
    // $manufacturers=Manufacturers::findOrFail($id);
    // dd($manufacturers);
    // return new ManufacturersResource($manufacturers);
  }

  public function edit($id)
  {

  }

  public function update(Request $request,$id)
  {
    if($manufacturers=Manufacturers::find($id)){
      $manufacturers->name=$request->input('name');
      $manufacturers->save();

      return response()->json($manufacturers);
    }
    else{
      return response()->json("Nu exista");
    }
  }

  public function destroy($id)
  {
    if($manufacturers=Manufacturers::find($id)){
      if(count(Cars::where('manufacturer_id', $id)->get())) {
        return response()->json([
          'status' => 'error',
          'msg' => 'The manufacturer can not be deleted because it has associated cars'
        ]);
      } else {
          $manufacturers->delete();
          // return new ManufacturersResource($manufacturers);
          return response()->json([
            'status' => 'success',
            'msg' => 'The manufacturer has been deleted'
          ]);
        }
      }
      else{
        return response()->json(['msg' => 'Nu exista']);
      }
    }





}
