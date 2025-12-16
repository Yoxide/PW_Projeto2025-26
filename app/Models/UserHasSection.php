<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserHasSection extends Model
{
    use HasFactory;

    protected $table = 'user_has_sections';

    protected $fillable = [
        'user_id',
        'section_id'
    ];

    /*Relationships*/
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }
}
