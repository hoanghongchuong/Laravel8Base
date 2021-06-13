<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = ['parent_id', 'name_vi',
        'name_en',
        'name_es',
        'slug', 'order', 'status'];

    public function getAllMenu() {
        return $this->where("status", 1)->get();
    }
    public function parent() {
        return $this->hasOne(Menu::class, 'id', 'parent_id');
    }
}
