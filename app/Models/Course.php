<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;

    protected $fillable = ["name", "branch_id", "duration", "price"];

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }

    public function groups(): HasMany
    {
        return $this->hasMany(Group::class);
    }
}
