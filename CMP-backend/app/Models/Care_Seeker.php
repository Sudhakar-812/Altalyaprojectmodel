<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Care_Seeker extends Model
{
    use HasFactory;
    protected $table = 'care_seekers';
    protected $fillable = ['alt_phone'];
}
