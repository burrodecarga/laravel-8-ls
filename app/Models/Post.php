<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'position',
        'responsibilities',
        'qualifications',
        'min_salary',
        'max_salary',
        'schedule',
        'class',
        'body',
        'state',
        'city',
        'active',

    ];


    public function scopeTermino($query,$termino)
    {
       if($termino === ''){ return;}
       return $query->where('title','like',"%{$termino}%");
    }

    public function scopeSchedule($query,$termino)
    {
        if($termino === ''){ return;}
        return $query->where('schedule','like',"%{$termino}%");
    }

    public function scopeState($query,$termino)
    {
        if($termino === ''){ return;}
        return $query->where('state','like',"%{$termino}%");
    }

    public function scopePosition($query,$termino)
    {
        if($termino === ''){ return;}
        return $query->where('position','like',"%{$termino}%");
    }

    public function scopeSalary($query,$termino)
    {
        if($termino === ''){ return;}
        return $query->where('max_salary','<=',$termino);
    }

}