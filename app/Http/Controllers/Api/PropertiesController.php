<?php

namespace App\Http\Controllers\Api;

use  App\Http\Controllers\Controller;
use App\Http\Requests\StorePropertiesRequest;
use App\Http\Resources\PropertiesResource;
use App\Models\Property;
use Illuminate\Http\Request;

/**
 *
 */
class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return PropertiesResource::collection(Property::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return PropertiesResource
     */
    public function store(StorePropertiesRequest $request)
    {
        $property= Property::create([
            "broker"=>$request->broker,
            "address"=>  $request->address,
            "listing_type"=>  $request->listing_type,
            "city"=>  $request->city,
            "zip_code"=>  $request->zip_code,
            "description"=>  $request->description,
            "build_year"=>  $request->build_year
        ]);

        $property->charateristic()->create([
            'property'=>$property->id,
            'price'=>$request->price,
            'bedrooms'=>$request->bedrooms,
            'bathrooms'=>$request->bathrooms,
            'sqft'=>$request->sqft,
            'sqft_price'=>$request->sqft_price,
            'property_type'=>$request->property_type,
            'status'=>$request->status
        ]);


        return new PropertiesResource($property);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return PropertiesResource
     */
    public function show(Property $property)
    {
        return new PropertiesResource($property);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return PropertiesResource
     */
    public function update(Request $request, Property $property)
    {
       $property->update([$request->only([
               'address','listing_type','city','zip_code','description','build_year'
           ])]);
       return new PropertiesResource($property);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        $property->delete();

        return response()->json([
            'success'=>true,
            'message'=>'Properties as been deletede sucessfuly!'
        ]);
    }
}
