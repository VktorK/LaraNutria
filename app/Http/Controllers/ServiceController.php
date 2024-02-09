<?php

namespace App\Http\Controllers;

use App\Http\Requests\Service\StoreServiceRequest;
use App\Http\Requests\Service\UpdateServiceRequest;
use App\Models\Order;
use App\Models\Promocode;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Service::all();
        return $data->fresh();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $data = $request->validated();
        return Service::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
       return $service;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $data = $request->validated();
        $service->update($data);
        return $service->fresh();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
       $service->delete();
       return response(Response::HTTP_OK);
    }
}
