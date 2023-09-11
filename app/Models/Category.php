<?php

namespace App\Models;

use App\Models\Jelo;
use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Category extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    protected $table = 'categories';

    public static $searchable = [
        'title',
        'slug'
    ];
    
    public $translatedAttributes = ['title', 'slug'];

    public function jela() {
        return $this->hasMany( Jelo::class);
    }
}
