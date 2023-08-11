<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Author extends Authenticatable
{
    use HasFactory , HasRoles;
    public function user(){
        return $this->morphOne(User::class , 'actor' , 'actor_type' , 'actor_id' , 'id');
    }

    public function articles(){
        return $this->hasMany(Article::class);
    }


    protected static function boot() {
        parent::boot();

        static::deleting(function($author) {
            $author->user()->delete();

        });
    }


    protected static function boot1() {
        parent::boot();

        static::deleting(function($author) {
            $author->articles()->delete();

        });
    }
}
