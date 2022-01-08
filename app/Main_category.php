<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main_category extends Model
{
    protected $table = 'main_categories';

    protected $fillable = [
        'translation_lang', 'translation_of', 'name','slug','photo','active',
    ];

    public function scopeActive($query){
        return $query -> where('active',1);
    }
}

