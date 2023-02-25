<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBrokerRequest;
use App\Http\Resources\BrokerResourece;
use App\Models\Broker;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 *
 */
class BrokersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return BrokerResourece::collection(Broker::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBrokerRequest $request
     * @return BrokerResourece
     */
    public function store(StoreBrokerRequest $request)
    {
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
     * @param Broker $broker
     * @return BrokerResourece
     */
    public function show(Broker $broker)
    {
        return new BrokerResourece($broker);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Broker $broker
     * @return BrokerResourece
     */
    public function update(Request $request, Broker $broker)
    {
        $broker->update($request->only([
            'name','address','city','zip_code','phone_number','logo_path'
        ]));
        return new BrokerResourece($broker);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Broker $broker
     * @return JsonResponse
     */
    public function destroy( Broker $broker)
    {
        $broker->delete();

        return response()->json([
           'success'=>true,
            'message'=>'Broker as been deletede sucessfuly!'
        ]);
    }
}
