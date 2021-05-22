<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_vi', 'name_en','slug_vi', 'slug_en', 'parent_id', 'type'
    ];

    public function getAllCategory()
    {
        return $this->get();
    }

    public function getCategoryPaginate()
    {
        $query = $this->paginate(20);
        return $query;
    }
}
