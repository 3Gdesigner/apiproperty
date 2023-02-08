<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBrokerRequest;
use App\Http\Resources\BrokerResourece;
use App\Models\Broker;
use Illuminate\Http\Request;

class BrokersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BrokerResourece::collection(Broker::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrokerRequest $request)
    {
        $request->validate();

        $broker = Broker::create([
            "name" => $request->name,
            "address" => $request->address,
            "city" => $request->city,
            "zip_code" => $request->zip_code,
            "phone_number" => $request->phone_number,
            "logo_path" => $request->logo_path,
        ]);

        return new BrokerResourece($broker);
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
     * @param  \Illuminate\Http\Request  $request
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