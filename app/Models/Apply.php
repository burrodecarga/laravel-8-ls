<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'user_id'
    ];


    public function applies()
    {
        return $this->hasMany(Apply::class);
    }


}
