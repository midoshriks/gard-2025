<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function employee()
    {
        return $this->hasMany(Employees::class, 'employe_id', 'id');
    }
}
