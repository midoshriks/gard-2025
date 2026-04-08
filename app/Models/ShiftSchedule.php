<?php

// app/Models/ShiftSchedule.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShiftSchedule extends Model
{
    protected $guarded = [];

    public function employee()
    {
        return $this->belongsTo(Employees::class, 'employee_id');
    }

    public function job()
    {
        return $this->belongsTo(Jobs::class, 'job_id');
    }
}
