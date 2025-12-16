<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Checklist extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'state',
        'finished_by',
        'finished_at'
    ];

    /* Relationships*/
    public function finishedByUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'finished_by');
    }

    public function scheduling(): BelongsTo
    {
        return $this->belongsTo(Scheduling::class);
    }
}
