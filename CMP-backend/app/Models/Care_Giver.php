<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Care_Giver extends Model
{
    use HasFactory;
    protected $table = 'care_givers';
    protected $fillable = ['DOB','sal_expectation','education','degree','health_issues','about_self','other_expectation','is_cmp_verified','alt_phone'];
}
