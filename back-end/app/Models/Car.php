<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected  $table = 'car_info';

    protected $fillable = [
        'id',
        'certificate_id',
        'start_date',
        'end_date',
        'center_name',
        'license_plate',
        'type',
    ];
}
