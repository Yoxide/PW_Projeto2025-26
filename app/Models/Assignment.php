<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Assignment extends Model
{
    use HasFactory;
    protected $fillable = [
        'role',
        'state',
        'work_hours',
        'user_id'
    ];

    /*Relationships*/
    public function user()
    {return $this->belongsTo(User::class);}
}
