<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends User
{
    use HasFactory;

    public function applies()
    {
        return $this->hasMany(Apply::class);
    }

    public function candidate()
    {
        return $this->belongsTo(User::class);
    }
}
