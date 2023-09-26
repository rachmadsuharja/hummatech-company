<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkMethod extends Model
{
    use HasFactory;

    protected $table = 'work_methods';
    protected $fillable = ['work_title', 'work_description', 'first_cover', 'second_cover'];
}
