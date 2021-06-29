<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'name_vi', 'name_en', 'name_es', 'slug_vi', 'slug_en',
        'description_vi',
        'description_en',
        'description_es',
        'content_vi',
        'content_en',
        'content_es',
        'image_vi', 'image_en', 'status_vi', 'status_en', 'type','icon'
    ];
    public function getImageAttribute()
    {
        return !empty($this->attributes['image_vi']) ? asset($this->attributes['image_vi']) : '';
    }
    public function getIconAttribute()
    {
        return !empty($this->attributes['icon']) ? asset($this->attributes['icon']) : '';
    }
    public function getPostPaginate($type) {
        return $this->where('type', $type)->paginate(20);
    }
}
