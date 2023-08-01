<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Review::all();
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
        $fileName = time() . '_' . $request->file->getClientOriginalName();
        $request->file->move(public_path('uploads/'), $fileName);

        $data = Review::create([
            'name' => $request->input('name'),
            'degi' => $request->input('degi'),
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
        $data=Review::find($id);
        return response()->json(['success'=>true,'data'=>$data,'message'=>'fetched successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data=Review::find($id);
        return response()->json(['success'=>true,'data'=>$data,'message'=>'fetched successfully!']);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if($request->file()){
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $request->file->move(public_path('uploads/'), $fileName);
    
            $data = Review::find($id)->update([
                'name' => $request->input('name'),
                'degi' => $request->input('degi'),
                'details' => $request->input('details'),
                'photo' => $fileName,
            ]); 
        }else{
            $data = Review::find($id)->update([
                'name' => $request->input('name'),
                'degi' => $request->input('degi'),
                'details' => $request->input('details'),
            
            ]);  
        }
        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'created successfully!',
        ]);
  
     
    }


    // $fileName = time() . '_' . $request->file->getClientOriginalName();
    // $request->file->move(public_path('uploads/'), $fileName);

    // $data = Review::find($id)->update([
    //     'name' => $request->input('name'),
    //     'degi' => $request->input('degi'),
    //     'details' => $request->input('details'),
    //     'photo' => $fileName,
    // ]);   
    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
      
       Review::find($id)->delete();
        return response()->json(['success'=>true, 'message'=>'Delected Successfully']);
    }
}
