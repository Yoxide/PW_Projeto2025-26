<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LodgingOwner extends Model
{
    protected $table = 'lodging_owners';

    protected $fillable = [
        'name',
        'email',
        'phone',
    ];

    public function lodgings()
    {
        return $this->hasMany(Lodging::class);
    }
}
