<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    use HasFactory;

    protected $table = 'news_category';
    protected $fillable = ['category', 'slug', 'sub_category'];
    public function news() {
        return $this->belongsToMany(News::class, 'category_news', 'category_id', 'news_id');
    }
}
