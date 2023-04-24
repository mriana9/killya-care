<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{

    protected $fillable = [
        'name',
        'phone',
        'message',
        'user_id'
    ];



    public function answer()
    {
        return $this->hasOne(Answer::class, 'contact_id');
    }
}
