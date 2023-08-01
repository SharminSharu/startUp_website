<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Comment::all();
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
      
        $data=Comment::create([
            'name'=>$request->input ('name'),
            'email'=>$request->input ('email'),
            'website'=>$request->input ('website'),
            'comment'=>$request->input('comment'),
        ]);
            return response()->json(['success'=>true,'data'=>$data,'message'=>'created successfully!']);
    }


    /**
     * Display the specified resource.
     */
    public function show(comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       Comment::find($id)->delete();
        return response()->json(['success'=>true, 'message'=>'Delected Successfully']);
    }
}
