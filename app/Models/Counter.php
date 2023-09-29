<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory;

    protected $table = 'counters';
    protected $fillable = ['school','university','alumnus','student_quota','industrial_class','industrial_class_quota'];
}
