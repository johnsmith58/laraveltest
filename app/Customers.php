<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    //
    protected $fillable = ['name', 'email', 'active'];

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeInactive($query)
    {
        return $query->where('active', 2);
    }
}
