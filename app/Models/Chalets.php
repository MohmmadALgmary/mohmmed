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
    public function imge(){
        return $this->morphMany(User::class , 'actor' , 'actor_type' , 'actor_id' , 'id');
    }
   
    public function imges(){
        return $this->hasMany(Imge::class);
    }
}
