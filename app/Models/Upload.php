<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Upload extends Model
{
    use HasFactory;

    protected $fillable = [
        'sent_by',
        'type',
        'url',
        'description',
        'user_id',
        'scheduling_id',
        'scheduling_user'
    ];

    /* Relationships*/

    public function sender(): BelongsTo
    {
        return $this->belongsTo(User::class, 'sent_by');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scheduling(): BelongsTo
    {
        return $this->belongsTo(Scheduling::class);
    }

    public function schedulingUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'scheduling_user');
    }
}
