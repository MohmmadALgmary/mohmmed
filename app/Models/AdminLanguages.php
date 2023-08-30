<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminLanguages extends Model
{
    use HasFactory;

    public function admins(){
        return $this->hasMany(Admin::class );
    }

    public function languages(){
        return $this->hasMany(Language::class );
    }

}
