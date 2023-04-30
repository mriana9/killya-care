<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Answer extends Model
{

// public static  function boot()
// {
//     saving(){}
//     dd("fuck");
// }


public static function boot()
{
    parent::boot();

    self::saving(function ($answer) {
        $answer->user = auth()->user()->name;
    });
}

    public function contact()
    {
        return $this->belongsTo(Contact::class, 'contact_id');
    }
}
