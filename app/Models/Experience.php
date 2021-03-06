<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
       'user_id',
       'company',
       'position',
       'description',
       'date_begin',
       'date_end',
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getDateBeginAttribute($value)
{
    $date = Carbon::parse($value)->format('d-m-Y');
        return $date;
}

public function getDateEndAttribute($value)
{
    $date = Carbon::parse($value)->format('d-m-Y');
        return $date;
}
}
