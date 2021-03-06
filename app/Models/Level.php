<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $fillable = ['name','class'];

    public function skill_user()
    {
        return $this->belongsToMany(SkillUser::class);
    }

}
