<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LodgingOwner extends Model
{
    use HasFactory;

    protected $table = 'lodging_owners';

    protected $fillable = [
        'lodging_owner_name',
        'contact',
        'address',
        'user_id'
    ];

    /*Relationships*/
    public function lodgings(): HasMany
    {
        return $this->hasMany(Lodging::class, 'lodging_owner_id');
    }
    public function userLodgings(): HasMany
    {
        return $this->hasMany(UserHasLodging::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
