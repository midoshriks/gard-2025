<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DayOff extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'date' => 'date',
    ];

    public function employee()
    {
        return $this->belongsTo(Employees::class, 'employee_id', 'id');
    }
}
