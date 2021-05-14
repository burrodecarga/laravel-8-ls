<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','skill','skill_id',
    'slug','level','category','tag'];


public function user()
{
    return $this->belongsTo(User::class);
}


}
