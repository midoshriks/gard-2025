<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashierPost extends Model
{
    use HasFactory;
    protected $guarded = [];

    // دالة لحساب صافي الدخل
    public function netIncome()
    {
        return $this->totalepost - ($this->memoirs + $this->purchases + $this->mandate);
    }
}
