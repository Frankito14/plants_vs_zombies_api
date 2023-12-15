<?php

namespace App\Http\Controllers;

use App\Models\Planta;
use App\Http\Requests\StorePlantaRequest;
use App\Http\Requests\UpdatePlantaRequest;

class PlantaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plantas = Planta::select('name', 'cost as sunCost', 'damage', 'range', 'special', 'description', 'image')->get();
        return response()->json($plantas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlantaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $planta = Planta::findOrFail($id);
        return response()->json($planta);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Planta $planta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlantaRequest $request, Planta $planta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Planta $planta)
    {
        //
    }
}
