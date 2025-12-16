<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserHasLodging extends Model
{
    use HasFactory;

    protected $table = 'user_has_lodgings';

    protected $fillable = [
        'user_id',
        'lodging_id',
        'lodging_owner_id'
    ];

    /*Relationships*/

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function lodging(): BelongsTo
    {
        return $this->belongsTo(Lodging::class);
    }

    public function lodgingOwner(): BelongsTo
    {
        return $this->belongsTo(LodgingOwner::class);
    }
}
