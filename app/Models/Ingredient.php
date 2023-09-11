<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Ingredient extends Model implements TranslatableContract
{
    use HasFactory;

    use Translatable;
    
    protected $table = 'ingredients';

    public static $searchable = [
        'title',
        'slug'
    ];

    public $translatedAttributes = ['title', 'slug'];


    public function jelo() {
        return $this->hasMany( Jelo::class);
    }
}
