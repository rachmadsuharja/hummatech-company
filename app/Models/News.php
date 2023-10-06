<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    protected $fillable = ['photo', 'subject', 'slug', 'news_content'];
    public function category() {
        return $this->belongsToMany(NewsCategory::class, 'category_news', 'news_id', 'category_id');
    }
}
