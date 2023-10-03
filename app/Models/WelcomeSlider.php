<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelcomeSlider extends Model
{
    use HasFactory;

    protected $table = 'welcome_sliders';
    protected $fillable = ['slider_cover','slider_title'];
}
