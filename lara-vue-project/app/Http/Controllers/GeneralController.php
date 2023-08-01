<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=General::all();
        return response ()->json([ 'success'=>true,'data'=>$data, 'message' =>'successfully show']);
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
    public function store(Request $request)
    {
        $data=General::create([
            'address'=>$request->input ('address'),
            'email'=>$request->input ('email'),
            'phn'=>$request->input('phn'),
            'map'=>$request->input('map'),
        ]);
            return response()->json(['success'=>true,'data'=>$data,'message'=>'created successfully!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(General $general)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(General $general)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, General $general)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(General $general)
    {
        //
    }
}
