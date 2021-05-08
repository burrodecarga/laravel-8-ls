<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'employer_id'
    ];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
