<?php

namespace App\Http\Controllers;

use App\Models\Jelo;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $search = $request->search;  
        $jela = Jelo::where(function($query) use ($search){
            $query->where('title', 'like', "%$search%")
            ->orWhere('created_at','like',"%$search%");
        })
        ->orWhereHas('category', function($query) use ($search){
            $query->where('title', 'like', "%$search%");
        })
        ->get()->paginate(4);

        return view('jela.search', compact('jela', 'search'));
    }
}


