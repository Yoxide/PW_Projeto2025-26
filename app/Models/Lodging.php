<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lodging extends Model
{
    use HasFactory;
    protected $table = 'lodgings';
    protected $fillable = [
        'name',
        'address',
        'capacity',
        'type',
        'description',
        'lodging_owner_id',
        'state',
    ];

    public function owner()
    {
        return $this->belongsTo(LodgingOwner::class, 'lodging_owner_id');
    }

    public function schedulings()
    {
        return $this->hasMany(Scheduling::class);
    }
}
