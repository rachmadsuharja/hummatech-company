<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubsidiaryCompany extends Model
{
    use HasFactory;

    protected $table = 'subsidiary_companies';
    protected $fillable = ['name','company_description','logo'];
}
