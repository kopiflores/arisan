<?php

namespace App\Models;

use Faker\Provider\ar_EG\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Prompts\Note;

class Arisan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start_date',
        'total_amount',
        'rules'
    ];

    public function members()
    {
        return $this->belongsToMany(User::class, 'arisan_members')->withPivot('status');
    }


    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
