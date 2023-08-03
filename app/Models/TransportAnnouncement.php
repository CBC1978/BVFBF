<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransportAnnouncement extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'transport_announcement';

    protected $fillable = [
        'fk_carrier_id',
        'origin',
        'destination',
        'limit_date',
        'vehicule_type',
        'weight',
        'description',
    ];
}
