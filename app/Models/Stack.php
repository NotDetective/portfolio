<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Stack extends Model
{
    /** @use HasFactory<\Database\Factories\StacksFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
    ];

    public function capabilities(): HasMany
    {
        return $this->hasMany(Capability::class);
    }
}
