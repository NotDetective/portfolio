<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Capability extends Model
{
    /** @use HasFactory<\Database\Factories\CapabilityFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'stack_id',
    ];

    public function stack(): HasOne
    {
        return $this->hasOne(Stack::class);
    }
}
