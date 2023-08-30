<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use HasFactory,HasRoles , SoftDeletes,HasApiTokens;
    public function user(){
        return $this->morphOne(User::class , 'actor' , 'actor_type' , 'actor_id' , 'id');
    }

    protected static function boot() {
        parent::boot();

        static::deleting(function($admin) {
            $admin->user()->delete();

        });
    }

    public function languages(){
        return $this->belongsTo(Language::class ,'admin_languages');
    }

}
