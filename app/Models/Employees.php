<?php

namespace App\Models;

use App\Models\Jobs;
use App\Models\Slide;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employees extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function job()
    {
        return $this->belongsTo(Jobs::class);
    }

    public function slide()
    {
        return $this->belongsTo(Slide::class);
    }

    public function tips()
    {
        return $this->belongsTo(Tip::class);
    }
}
