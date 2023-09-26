<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyServices extends Model
{
    use HasFactory;

    protected $table = 'company_services';
    protected $fillable = ['services_title', 'services_description'];
}
