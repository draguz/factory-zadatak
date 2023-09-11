<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Jelo;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function index(Request $request){

        dd($request->all());

        $categories = Category::all();
        $tags = Tag::all();
        $ingredients = Ingredient::all();

        $query = Jelo::query();

        if(isset($request->naziv) && notNullValue($request->naziv)){
            $query->where('naziv', $request->naziv);
        }

        if(isset($request->category) && notNullValue($request->category)){
            $query->whereHas('category', function($q) use ($request){
                $q->where('id', $request->category);   
            });
        }


        $jela = $query->get();

        return view('search', compact('categories', 'tags', 'ingredients','jela'));
    }
}
