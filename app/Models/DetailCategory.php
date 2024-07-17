<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'harga',
        'foto',
    ];

    public function posts(): HasMany
    {
        return $this->hasMany(Category::class, 'category_id');
    }
}
