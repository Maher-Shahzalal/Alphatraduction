<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'languages';

    protected $fillable = [
        'abbr', 'locale', 'name','direction','active',
    ];

    public function scopeActive($query){
        return $query -> where('active',1);
    }

    public function scopeSelection($query){
        return $query -> where('abbr', 'locale', 'name','direction','active');
    }
}
