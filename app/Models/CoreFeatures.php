<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoreFeatures extends Model
{
    use HasFactory;

    protected $table = 'core_features';
    protected $fillable = ['core_features'];
}
