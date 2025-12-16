<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nif',
        'address',
        'email',
        'phone'
    ];

    /* Relationships*/
    public function sections(): HasMany
    {
        return $this->hasMany(Section::class);
    }

    public function teams(): HasMany
    {
        return $this->hasMany(Team::class);
    }

    public function lodgings(): HasMany
    {
        return $this->hasMany(Lodging::class);
    }

    public function materials(): HasMany
    {
        return $this->hasMany(Material::class);
    }
}
