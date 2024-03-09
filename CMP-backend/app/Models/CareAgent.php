<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareAgent extends Model
{
    use HasFactory;
    protected $table = 'careagents';
    protected $fillable = ['gstin_number','certificate_url'];
}
