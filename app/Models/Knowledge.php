<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
        'category_id',
        'name',
        'slug',
        'level_id',
        'user_id'
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ltrim(ucfirst($value));
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
