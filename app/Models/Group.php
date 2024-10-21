<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Group extends Model
{
    /** @use HasFactory<\Database\Factories\GroupFactory> */
    use HasFactory;

    protected $fillable = ["name", "course_id", "teacher_id", "start_date", "finish_date", "students_count", "start_time", "end_time", "schedule_type"];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
