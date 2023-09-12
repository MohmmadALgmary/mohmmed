<?php

namespace App\Models;
use App\Models\City;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory ;

    public function cities(){
        return $this->hasMany(City::class);
    }
    public function articles(){
        return $this->hasMany(Article::class);
    }

    protected static function boot() {
        parent::boot();

        static::deleting(function($country) {
            $country->cities()->delete();

        });
    }
}
