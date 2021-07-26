<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Apartment extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'apartmentName',
        'address',
        'price',
        'general_information',
        'detailed_information',
        'avatar',
        'status',
    ];
}
