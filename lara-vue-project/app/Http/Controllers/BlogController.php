<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about=Blog::all();
        return response ()->json([ 'success'=>true,'data'=>$about, 'message' =>'successfully show']);
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

        $data = Blog::create([
            'title' => $request->input('title'),
            'name' => $request->input('name'),
            'Badge' => $request->input('Badge'),
            'date' => $request->input('date'),        
            'details' => $request->input('details'),
            'maindetails' => $request->input('maindetails'),
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
        $data=Blog::find($id);
        return response()->json(['success'=>true,'data'=>$data,'message'=>'fetched successfully!']);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data=Blog::find($id);
        return response()->json(['success'=>true,'data'=>$data,'message'=>'fetched successfully!']);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        if($request->file()){
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $request->file->move(public_path('uploads/'), $fileName);
    
            $data = Blog::find($id)->update([
                'title' => $request->input('title'),
                'name' => $request->input('name'),
                'Badge' => $request->input('Badge'),
                'date' => $request->input('date'),        
                'details' => $request->input('details'),
                'maindetails' => $request->input('maindetails'),
                'photo' => $fileName,
            ]);  
        }else{
            $data = Blog::find($id)->update([
                'title' => $request->input('title'),
                'name' => $request->input('name'),
                'Badge' => $request->input('Badge'),
                'date' => $request->input('date'),        
                'details' => $request->input('details'),
                'maindetails' => $request->input('maindetails'),
             
            ]);  
        }
   
        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'created successfully!',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Blog::find($id)->delete();
        return response()->json(['success'=>true,'message'=>' deleted successfully!']);
    }
}
