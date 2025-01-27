<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:64',
            'description' => 'required|string|max:512',
            'price' => 'required|numeric|gt:0',
            'has_battery' => 'required|boolean',
            'battery_duration' => 'required_if:has_battery,true|numeric|gt:0',
            'colors' => 'required|array|min:1',
            'colors.*' => 'required|string',
            'dimensions' => 'required|array',
            'dimensions.width' => 'required|numeric|gt:0',
            'dimensions.height' => 'required|numeric|gt:0',
            'dimensions.length' => 'required|numeric|gt:0',
            'accessories' => 'required|array|min:1',
            'accessories.*.name' => 'required|string',
            'accessories.*.price' => 'required|numeric|gt:0'
        ]);

        return 'done!';
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
