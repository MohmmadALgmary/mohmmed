<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_category extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function chalets(){
        return $this->hasMany(Chalet::class,'sub_category_id','id')->take(3)->orderBy('Created_at','desc');
    }
}
