<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Tag extends Model implements TranslatableContract
{
    use HasFactory;

    use Translatable;
    
    protected $table = 'tags';

    public $translatedAttributes = ['title', 'slug'];

    public static $searchable = [
        'title',
        'slug'
    ];

    public function jelo() {
        return $this->hasMany(Jelo::class);
    }
}
