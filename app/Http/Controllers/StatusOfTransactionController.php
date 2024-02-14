<?php

namespace App\Http\Controllers;

use App\Http\Requests\StatusOfTransaction\StoreStatusOfTransactionRequest;
use App\Http\Requests\StatusOfTransaction\UpdateStatusOfTransactionRequest;
use App\Http\Resources\StatusOfTransactionResource;
use App\Models\StatusofTransaction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StatusOfTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return StatusOfTransactionResource::collection(StatusofTransaction::all())->resolve();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStatusOfTransactionRequest $request)
    {
        $data = $request->validated();
        $statusOfTransaction = StatusofTransaction::create($data);
        return StatusOfTransactionResource::make($statusOfTransaction);
    }

    /**
     * Display the specified resource.
     */
    public function show(StatusofTransaction $statusofTransaction)
    {
        return StatusOfTransactionResource::make($statusofTransaction);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStatusOfTransactionRequest $request, StatusofTransaction $statusofTransaction)
    {
        $data = $request->validated();
        $statusofTransaction->update($data);
        $statusofTransaction = $statusofTransaction->fresh();
        return StatusOfTransactionResource::make($statusofTransaction);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StatusofTransaction $statusofTransaction)
    {
        $statusofTransaction->delete();
        return response(Response::HTTP_OK);
    }
}
