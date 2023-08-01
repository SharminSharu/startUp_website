<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider=Slider::all();
        return response ()->json([ 'success'=>true,'data'=>$slider, 'message' =>'successfully show']);
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
        $fileName = time() . '_' . $request->file->getClientOriginalName();
        $request->file->move(public_path('uploads/'), $fileName);

        $data = Slider::create([
            'title' => $request->input('title'),
            'details' => $request->input('details'),
            'photo' => $fileName,
        ]);     
        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'created successfully!',
        ]);
     
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data=Slider::find($id);
        return response()->json(['success'=>true,'data'=>$data,'message'=>'fetched successfully!']);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data=Slider::find($id);
        return response()->json(['success'=>true,'data'=>$data,'message'=>'fetched successfully!']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $fileName = time() . '_' . $request->file->getClientOriginalName();
        $request->file->move(public_path('uploads/'), $fileName);

        $data = Slider::find($id)->update([
            'title' => $request->input('title'),
            'details' => $request->input('details'),
            'photo' => $fileName,
        ]);     
        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'Updated successfully!',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
      
        Slider::find($id)->delete();
        return response()->json(['success'=>true, 'message'=>'Delected Successfully']);
    }
}
