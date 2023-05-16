<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarPurpose extends Model
{
    use HasFactory;

    protected $table = 'car_purpose';

    protected $fillable =  [
        'id',
        'purpose',
    ];
}
