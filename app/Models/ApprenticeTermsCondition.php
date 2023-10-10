<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprenticeTermsCondition extends Model
{
    use HasFactory;

    protected $table = 'apprentice_terms_conditions';
    protected $fillable = ['terms_and_conditions'];
}
