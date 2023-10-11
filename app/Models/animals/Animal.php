<?php

namespace App\Models\animals;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'species',
        'ecosystem',
        'food',
        'exams',
        'diseases',
        'weight',
        'medicines',
    ];
}
