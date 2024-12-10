<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Menu;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'status'
    ];

    // Quan hệ với menus
    public function menus(): HasMany
    {
        return $this->hasMany(Menu::class,'category_id','id');
    }
}