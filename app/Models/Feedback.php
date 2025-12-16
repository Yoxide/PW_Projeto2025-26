<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'review',
        'comment',
        'comment_date'
    ];

    /* Relationships*/

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function schedulings(): HasMany
    {
        return $this->hasMany(Scheduling::class);
    }
    public function userTeams()
    {
        return $this->hasMany(UserHasTeam::class);
    }

}
