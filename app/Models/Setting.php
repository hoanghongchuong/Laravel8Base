<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['facebook', 'instagram', 'youtube', 'zalo', 'email','name_vi','name_en','title_vi','company_vi',
        'title_en','company_en','address_vi','address_en','phone','hotline','logo','des_vi','des_en','copyright','iframe_map',
        'favicon', 'twitter', 'social_in', 'favicon'];

    public function getLogoAttribute() {
        return !empty($this->attributes['logo']) ? Storage::url($this->attributes['logo']) : '';
    }
    public function getFaviconAttribute() {
        return !empty($this->attributes['favicon']) ? Storage::url($this->attributes['favicon']) : '';
    }
}
