<?php

namespace App\Http\Controllers;

use App\Models\Zombie;
use App\Http\Requests\StoreZombieRequest;
use App\Http\Requests\UpdateZombieRequest;

class ZombieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $zombies = Zombie::all();
        return response()->json($zombies);
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
    public function store(StoreZombieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $zombie = Zombie::findOrFail($id);
        return response()->json($zombie);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Zombie $zombie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateZombieRequest $request, Zombie $zombie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Zombie $zombie)
    {
        //
    }
}
