<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table = 'driver'; 

    protected $fillable = [
        'name',
        'license_id',
        'date_issue',
        'place_issue',
        'fk_carrier_id'
    ];
}
