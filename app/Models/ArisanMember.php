<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArisanMember extends Model
{
    use HasFactory;

    protected $table = 'arisan_members';
    protected $fillable = [
        'arisan_id',
        'user_id',
        'status'
    ];
}
