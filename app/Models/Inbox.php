<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inbox extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'inboxes';
    protected $fillable = ['name','email','phone','subject','message','subject2','replied_message'];
}
