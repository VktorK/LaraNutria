<?php

namespace App\Http\Controllers;

use App\Http\Requests\Gender\StoreGenderRequest;
use App\Http\Requests\Gender\UpdateGenderRequest;
use App\Http\Resources\GenderResource;
use App\Models\Gender;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return GenderResource::collection(Gender::all())->resolve();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGenderRequest $request)
    {
        $data = $request->validated();
        $gender = Gender::create($data);
        return GenderResource::make($gender);
    }

    /**
     * Display the specified resource.
     */
    public function show(Gender $gender)
    {
        return GenderResource::make($gender);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGenderRequest $request, Gender $gender)
    {
        $data = $request->validated();
        $gender->update($data);
        $gender = $gender->fresh();
        return GenderResource::make($gender);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gender $gender)
    {
        $gender->delete();
        return response(Response::HTTP_OK);
    }
}
