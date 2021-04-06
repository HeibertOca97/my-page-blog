<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    //RELACIONES
    public function image(){
      return $this->morphOne("App\Models\Image", "imageable");
    }

    public function comments(){
      return $this->morphOne("App\Models\Comment", "commentable");
    }

    public function user(){
      return $this->belongsTo("App\Models\User");
    }

    public function category(){
      return $this->belongsTo("App\Models\Category");
    }

    public function tags(){
      return $this->morphToMany("App\Models\Tag", "taggable");
    }

}
