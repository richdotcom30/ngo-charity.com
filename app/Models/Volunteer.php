<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'postcode',
        'date_of_birth',
        'occupation',
        'skills_interests',
        'availability',
        'experience_level',
        'emergency_contact_name',
        'emergency_contact_phone',
        'motivation_statement',
        'status',
        'application_date',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'application_date' => 'datetime',
        'skills_interests' => 'array',
        'availability' => 'array',
    ];

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
