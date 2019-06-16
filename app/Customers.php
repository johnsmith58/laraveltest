<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    //
    // protected $fillable = ['name', 'email', 'active', 'company_id'];

    protected $guarded = [];

    protected $attribute  = [
        'inactive' => 2
    ];

    public function getActiveAttribute($attribute)
    {
        return[
            1 => 'Active',
            2 => 'Inactive'
        ][$attribute];
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeInactive($query)
    {
        return $query->where('active', 2);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
