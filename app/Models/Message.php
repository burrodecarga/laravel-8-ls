<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
   protected $fillable = ['user_id','subject','body','read'];

    use HasFactory;




public function user()
{
    return $this->belongsTo(User::class);
}

public function responses()
{
    return $this->hasMany(Response::class);
}

}
