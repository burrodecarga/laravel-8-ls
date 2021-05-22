<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillUser extends Model
{
    use HasFactory;

    public function levels()
    {
        return $this->belongsToMany(Level::class);
    }
}
