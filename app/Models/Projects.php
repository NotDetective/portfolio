<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'programming_languages_id',
        'type',
        'name',
        'link',
        'description',
        'archived',
        'last_update',
    ];

    public function programmingLanguage()
    {
        return $this->hasOne(ProgrammingLanguage::class, 'id', 'programming_languages_id');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
