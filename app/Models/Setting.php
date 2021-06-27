<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['facebook', 'instagram', 'youtube', 'zalo', 'email','name_vi',
        'name_en',
        'name_es',
        'title_vi',
        'title_en',
        'title_es',
        'company_vi',
        'company_en',
        'company_es',
        'address_vi',
        'address_en',
        'address_es',
        'phone','hotline','logo',
        'des_vi',
        'des_en',
        'des_es',
        'description_vi',
        'description_en',
        'description_es',
        'keyword_vi',
        'keyword_en',
        'keyword_es',
        'copyright','iframe_map',
        'favicon', 'twitter', 'social_in', 'favicon'];

    public function getLogoAttribute() {
        return !empty($this->attributes['logo']) ? asset($this->attributes['logo']) : '';
    }
    public function getFaviconAttribute() {
        return !empty($this->attributes['favicon']) ? asset($this->attributes['favicon']) : '';
    }
}
