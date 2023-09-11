<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Category;

use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Jelo extends Model implements TranslatableContract
{
    use HasFactory;

    use Translatable;

    protected $table = 'meals';
    
    public $translatedAttributes = ['title'];
    protected $fillable = ['category_id', 'status','created_at', 'updated_at'];

    public static $searchable = [
        'naziv',
        'created_at',
        'updated_at',
        'status',
        'meals_tags.tags.title',
        'meals_ingredients.ingredients.title',
        'meals.categories.title'
    ];

    public function ingredient() {
        return $this->hasMany( Ingredient::class);
    }

    public function tag() {
        return $this->hasMany(Tag::class );
    }

    public function category() {
        return $this->belongsTo(Category::class );
    }

    public function scopeFilter($query, array $filters){

    
        if($filter['search'] ?? false){
            $query->where('title', 'like', '%'.request('search').'%')
            ->orWhere('category_id', 'like', '%'.request('search').'%');
        }
        
    }
}
