<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function employees()
    // {
    //     return $this->hasMany(Advance::class, 'job_id', 'id');
    // }

    public function employees()
    {
        return $this->hasMany(Employees::class, 'job_id', 'id');
    }
}
