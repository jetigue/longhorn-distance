<?php

namespace App\Http\Controllers;

use App\Models\Admin\TerrainType;
use Illuminate\Http\Request;

class TerrainTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terrains = TerrainType::all();

        return view('admin.running_log.terrain_types.index', compact('terrains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\TerrainType  $terrainType
     * @return \Illuminate\Http\Response
     */
    public function create(TerrainType $terrainType)
    {

        return view('admin.running_log.terrain_types.create', compact('terrainType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TerrainType  $terrainType
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, TerrainType $terrainType)
    {
        $this->validate(request(), [
            'name'        => 'required',
            'description' => 'required',
            ]);

        TerrainType::create(request([
            'name',
            'description'
            ]));

        session()->flash(
            'message',
            'Terrain Type Created!'
        );

        return redirect('/admin/running_log/terrain_types');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TerrainType  $terrainType
     * @return \Illuminate\Http\Response
     */
    public function edit(TerrainType $terrainType)
    {
        return view('admin/running_log/terrain_types.edit', compact('terrainType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TerrainType  $terrainType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TerrainType $terrainType)
    {
        $terrainType->update($request->all());

        session()->flash(
            'message',
            'Terrain Type Updated!'
        );

        return redirect('/admin/running_log/terrain_types');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TerrainType  $terrainType
     * @return \Illuminate\Http\Response
     */
    public function destroy(TerrainType $terrainType)
    {
        $terrainType->delete();

        return redirect('admin/running_log/terrain_types');
    }
}
