<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            $about=Vendor::all();
            return response ()->json([ 'success'=>true,'data'=>$about, 'message' =>'successfully show']);
        }
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

        $data =Vendor::create([
          
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
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendor $vendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vendor $vendor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Vendor::find($id)->delete();
        return response()->json(['success'=>true,'message'=>' deleted successfully!']);
    }
}
