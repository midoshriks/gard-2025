<?php

namespace App\Models;
use App\Models\Section_Report;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function section()
    {
        return $this->belongsTo(Section_Report::class, 'section_report_id', 'id');
    }
}
