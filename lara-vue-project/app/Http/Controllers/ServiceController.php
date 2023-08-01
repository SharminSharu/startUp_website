<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service=Service::all();
        return response ()->json([ 'success'=>true,'data'=>$service, 'message' =>'successfully show']);
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
        $data=Service::create([
        'title'=>$request->input ('title'),
        'icon'=>$request->input ('icon'),
        'details'=>$request->input('details'),
    ]);
        return response()->json(['success'=>true,'data'=>$data,'message'=>'created successfully!']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data=Service::find($id);
        return response()->json(['success'=>true,'data'=>$data,'message'=>'fetched successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data=Service::find($id);
        return response()->json(['success'=>true,'data'=>$data,'message'=>'fetched successfully!']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data=Service::find($id)->update([
            'title'=>$request->input ('title'),
            'icon'=>$request->input ('icon'),
            'details'=>$request->input('details'),
        ]);
            return response()->json(['success'=>true,'data'=>$data,'message'=>'created successfully!']);
        }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        Service::find($id)->delete();
        return response()->json(['success'=>true, 'message'=>'Delected Successfully']);
    }
}
