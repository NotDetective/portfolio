<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    /** @use HasFactory<\Database\Factories\ExperienceFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'location',
        'description',
        'start_date',
        'end_date',
    ];

    protected function formatedDate(): Attribute
    {
        return Attribute::make(
            get: fn() => Carbon::create($this->start_date)->format(' M. Y') . " - " .  ( $this->end_date ? Carbon::create($this->end_date)->format(' M. Y') : "Present" ),
        );
    }
}
