<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Scheduling extends Model
{
    use HasFactory;
    protected $table = 'schedulings';
    protected $fillable = [
        'priority',
        'start_date',
        'estimated_days',
        'state',
        'notes',
        'lodging_id',];

    public function lodging(): BelongsTo
    {
        return $this->belongsTo(Lodging::class);
    }
    public function assignments(): HasMany
    {
        return $this->hasMany(Assignment::class);
    }

    public function checklists(): HasMany
    {
        return $this->hasMany(Checklist::class);
    }

    public function uploads(): HasMany
    {
        return $this->hasMany(Upload::class);
    }

    public function feedbacks(): HasMany
    {
        return $this->hasMany(Feedback::class);
    }

    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class);
    }
}
