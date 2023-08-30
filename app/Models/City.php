<?php

namespace App\Models;
use App\Models\Country;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public function country(){
        return $this->belongsTo(Country::class);
    }
   

    protected $hidden = [
        'created_at',
        'updated_at',
        'country_id'
    ];

    protected $fillable = [
        'name',
        'street',
        'country_id',
    ];
}

