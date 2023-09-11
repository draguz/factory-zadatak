<?php

namespace App\Http\Controllers;

use App\Models\Jelo;
use App\Models\Category;
use Illuminate\Http\Request;


class JeloController extends Controller
{
   // show all  jelo 
   public function index(Request $request){
    $meals = Jelo::all();

    return view('jela.index', compact('meals'));
   }

   
   //show single jelo
   public function show(Jelo $jelo){
        return view('jela.show', compact('jelo'));
   }


   public function search(Request $request){

   

        $search = $request->search;  

        if(isset($request->per_page)){
            $per_page= $request->per_page ;
        }else{
            $per_page= 10 ;
        }
        if(isset($request->diff_time)){
            $diff_time= date('Y-m-d H:i:s', $request->diff_time) ;
        }
        if(isset($request->tags)){
            $tags =  $request->tags;
            print_r($tags);
        }



        $jela = Jelo::where(function($query) use ($search){
            $query->where('naziv', 'like', "%$search%");
        })
        ->orWhereHas('category', function($query) use ($search) {
            $query->where('title', 'like', "%$search%");
        })
        ->get()->paginate($per_page);
        
        return view('jela.search', compact('jela', 'search' ));

   }




}
