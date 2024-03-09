<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareSeeker extends Model
{
    use HasFactory;
    protected $table = 'careseekers';
    protected $fillable = ['alt_phone'];
}
