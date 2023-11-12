<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDebtsRequest;
use App\Http\Requests\UpdateDebtsRequest;
use App\Models\Debts;

class DebtsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('debts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('debts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDebtsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Debts $debts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Debts $debts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDebtsRequest $request, Debts $debts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Debts $debts)
    {
        //
    }
}
