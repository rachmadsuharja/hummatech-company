<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryNewsPivot extends Model
{
    use HasFactory;

    protected $table = 'category_news';
    protected $fillable = ['news_id','category_id'];

    public function news()
    {
        return $this->belongsTo(News::class, 'news_id');
    }

    public function category()
    {
        return $this->belongsTo(NewsCategory::class, 'category_id');
    }
}
