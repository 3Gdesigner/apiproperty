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
            "address"=>  $request->address,
            "listing_type"=>  $request->listing_type,
            "city"=>  $request->city,
            "zip_code"=>  $request->zip_code,
            "description"=>  $request->description,
            "build_year"=>  $request->build_year
        ]);
        $property->charaterisc()->create([
            'property'=>$property->id,
            'address'=>"",
            'listing_type'=>"",
            'city'=>'',
            'zip_code'=>'',
            'description'=>'',
            'build_year'=>''.
            'build_year'=>''.
            'build_year'=>''.
            'build_year'=>''.
            'build_year'=>''.
            'build_year'=>''.
            'build_year'=>''.
        ]);

        
        return new PropertiesResource($property);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}