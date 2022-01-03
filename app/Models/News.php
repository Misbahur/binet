<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['judul', 'slug', 'thumbnail', 'banner', 'berita', 'kategori', 
                            'user_id', 'vie ws'];

    public function status()
    {
        return $this->hasOne(Status::class, 'news_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function hotNews()
    {
        return $this->hasOne(HotNews::class, 'id');
    }
}
