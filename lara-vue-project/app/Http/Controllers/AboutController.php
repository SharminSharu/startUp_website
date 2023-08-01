<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about=About::all();
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

        $data = About::create([
            'title' => $request->input('title'),
            'title_1' => $request->input('title_1'),
            'title_2' => $request->input('title_2'),
            'title_3' => $request->input('title_3'),
            'title_4' => $request->input('title_4'),
          
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
        $data=About::find($id);
        return response()->json(['success'=>true,'data'=>$data,'message'=>'fetched successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data=About::find($id);
        return response()->json(['success'=>true,'data'=>$data,'message'=>'fetched successfully!']);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
if($request->file()){
    $fileName = time() . '_' . $request->file->getClientOriginalName();
    $request->file->move(public_path('uploads/'), $fileName);

    $data =About::find($id)->update([
        'title' => $request->input('title'),
        'title_1' => $request->input('title_1'),
        'title_2' => $request->input('title_2'),
        'title_3' => $request->input('title_3'),
        'title_4' => $request->input('title_4'),
        'details' => $request->input('details'),
        'photo' => $fileName,        
    ]);
}else{
    $data =About::find($id)->update([
        'title' => $request->input('title'),
        'title_1' => $request->input('title_1'),
        'title_2' => $request->input('title_2'),
        'title_3' => $request->input('title_3'),
        'title_4' => $request->input('title_4'),
        'details' => $request->input('details'),
       
    ]);
}
return response()->json([
    'success' => true,
    'data' => $data,
    'message' => 'Updated successfully!',
]);
   
}

        // $fileName = time() . '_' . $request->file->getClientOriginalName();
        // $request->file->move(public_path('uploads/'), $fileName);

        // $data =About::find($id)->update([
        //     'title' => $request->input('title'),
        //     'title_1' => $request->input('title_1'),
        //     'title_2' => $request->input('title_2'),
        //     'title_3' => $request->input('title_3'),
        //     'title_4' => $request->input('title_4'),
        //     'details' => $request->input('details'),
        //     'photo' => $fileName,        
        // ]);
        //        return response()->json([
        //     'success' => true,
        //     'data' => $data,
        //     'message' => 'Updated successfully!',
        // ]);
     
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        About::find($id)->delete();
        return response()->json(['success'=>true,'message'=>' deleted successfully!']);
    }
}

// $data=Product::find($id)->update(['name'=>$request->pname,'price'=>$request->pprice]);
// return response()->json(['success'=>true,'data'=>$data,'message'=>'updated successfully!']);
