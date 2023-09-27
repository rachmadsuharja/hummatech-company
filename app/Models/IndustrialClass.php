<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndustrialClass extends Model
{
    use HasFactory;

    protected $table = 'industrial_classes';
    protected $fillable = ['school_name', 'school_logo', 'school_address', 'join_date'];
}
