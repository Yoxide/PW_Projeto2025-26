<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function lodging()
    {
        return $this->belongsTo(Lodging::class);
    }
}
