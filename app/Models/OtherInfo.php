<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherInfo extends Model
{
    use HasFactory;

    protected $table = 'other_infos';
    protected $fillable = ['email', 'start_working', 'finish_working', 'address'];
}
