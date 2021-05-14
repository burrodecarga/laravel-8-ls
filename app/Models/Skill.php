<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'category_id',
        'name',
        'slug',
        'level_id',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ltrim(ucfirst($value));
    }


    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
