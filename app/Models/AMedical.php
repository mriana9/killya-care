<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class AMedical extends Model
{


    public function comments()
    {
        return $this->hasMany(Comment::class,'news_id');
    }
}
