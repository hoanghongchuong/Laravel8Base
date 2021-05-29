<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['facebook', 'instagram', 'youtube', 'zalo', 'email','name_vi','name_en','title_vi','company_vi',
        'title_en','company_en','address_vi','address_en','phone','hotline','logo','des_vi','des_en','copyright','iframe_map',
        'favicon', 'twitter', 'social_in', 'favicon'];
}
