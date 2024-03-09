<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareGiver extends Model
{
    use HasFactory; 
    protected $table = 'caregivers';
    protected $fillable = ['dob','sal_expectation','education','degree','health_issues','about_self','other_expectation','is_cmp_verified','alt_phone'];
}
