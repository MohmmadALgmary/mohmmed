<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imge extends Model
{

    public function user(){
        return $this->morphMany(User::class , 'actor' , 'actor_type' , 'actor_id' , 'id');
    }
    use HasFactory;
    public function actor(){
        return $this->morphTo();
    }

    public function products(){
        return $this->hasMany(company::class);
    }
    public function chalet(){
        return $this->belongsTo(Chalet::class);
    }
}
