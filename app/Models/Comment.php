<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    //RELACIONES
    public function commentable(){
      return $this->morphTo();
    }

    public function user(){
      return $this->belongsTo("App\Models\User");
    }

}
