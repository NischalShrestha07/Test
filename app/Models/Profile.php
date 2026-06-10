<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'age',
        'fatherName',
        'motherName',
        'created_at',
        'updated_at',
    ];
}
