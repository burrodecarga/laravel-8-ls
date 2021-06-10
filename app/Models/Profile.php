<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address',
        'phone',
        'mobile',
        'birthdate',
        'about',
        'cost',
        'availability',
        'title',
        'city',
        'country',
    ];

    /* protected $dates = [
        'birthdate'
    ];
 */
    /* protected $casts = [
        'birthdate' => 'datetime:d-m-Y',
    ];
 */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
