<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPhno extends Model
{
    use HasFactory;
    protected $fillable = [
        'phnos',
    ];
}
