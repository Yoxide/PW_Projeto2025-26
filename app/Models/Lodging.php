<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function owner(): BelongsTo
    {
        return $this->belongsTo(LodgingOwner::class, 'lodging_owner_id');
    }

    public function schedulings(): HasMany
    {
        return $this->hasMany(Scheduling::class);
    }
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_has_lodgings')
            ->withPivot('lodging_owner_id')
            ->withTimestamps();
    }

}
