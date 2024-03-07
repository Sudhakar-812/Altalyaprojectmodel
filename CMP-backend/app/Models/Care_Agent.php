<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Care_Agent extends Model
{
    use HasFactory;
    protected $table = 'care_agents';
    protected $fillable = ['GSTIN_number','certificate_url'];
}
