<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    // Specify the fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'email',
        'phone',
        'status',
    ];
}