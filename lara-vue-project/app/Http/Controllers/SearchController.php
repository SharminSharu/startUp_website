<?php

namespace App\Http\Controllers;

use App\Models\Search;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
       $query =$request->input('search');
      $result=Search::with('about','blog','review','service','team')
      ->orwhere('title','like',"% $query %")
      ->orWhereRelation('about','title','like',"% $query %")
      ->orWhereRelation('service','title','like',"% $query %")
      ->orWhereRelation('blog','name','like',"% $query %")
      ->orWhereRelation('review','name','like',"% $query %")
      ->orWhereRelation('team','name','like',"% $query %")
      ->get();
      return response()->json($result);
    }
  }

    // $query = $request->input('query');
    // $searchc = Search::where('title', 'like', '%' . $query . '%')
    //     ->with('about','blog','review','service','team')
    //     ->get();

    // return response()->json($searchc);
