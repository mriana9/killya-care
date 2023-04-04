<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Appointment extends Model
{


    protected $fillable = [
        'name',
        'dob',
        'appointment',
        'name',
        'phone',
        'l_name',
        'user_id'
    ];



    public function scopeSearch($query, $search, $exclude = null, $skipIds = [], $exact = false)
{
    // Call the parent scope method to get the initial query builder
    $query = parent::scopeSearch($query, $search, $exclude, $skipIds, $exact);

    // Add a new where clause to filter by created_at
    if (isset($search['created_at'])) {
        $query->where('created_at', 'like', '%'.$search['created_at'].'%');
    }

    return $query;
}

}
