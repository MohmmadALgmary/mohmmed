<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chalets extends Model
{
    use HasFactory;
    protected $table='chalet';
    public function city(){
        return $this->belongsTo(City::class);
    }
   
    public function imges(){
        return $this->hasMany(Imge::class);
    }
}
