<?php

namespace App\Http\Controllers;

use App\Models\Plane;
use Illuminate\Http\Request;

class PlaneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $planes = Plane::all();

        return view("planes.index", compact("planes"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("planes.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Plane::create($request->all());

        return redirect()->route("planes.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Plane $plane)
    {
        return view("planes.show", compact("plane"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plane $plane)
    {
        return view("planes.edit", compact("plane"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plane $plane)
    {
        $plane->update($request->all());
        return redirect()->route("planes.show",['plane'=> $plane->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plane $plane)
    {
        //
    }
}
